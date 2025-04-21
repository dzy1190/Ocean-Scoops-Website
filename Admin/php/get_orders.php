<?php
session_start();
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');

try {
    require_once 'config.php';

    // Debug session
    if (empty($_SESSION)) {
        echo json_encode([
            'success' => false,
            'message' => 'Session tidak ditemukan',
            'session_data' => $_SESSION
        ]);
        exit;
    }

    if (!isset($_SESSION['admin_id'])) {
        http_response_code(401);
        echo json_encode([
            'success' => false,
            'message' => 'Unauthorized'
        ]);
        exit;
    }

    $status = $_GET['status'] ?? 'all';
    $search = $_GET['search'] ?? '';

    // Base query dengan pengurutan berdasarkan queue_number
    $query = "SELECT * FROM orders WHERE 1=1";
    $params = [];

    if ($status !== 'all') {
        $query .= " AND status = ?";
        $params[] = $status;
    }

    if (!empty($search)) {
        $query .= " AND (order_id LIKE ? OR product_name LIKE ?)";
        $params[] = "%$search%";
        $params[] = "%$search%";
    }

    // Urutkan berdasarkan queue_number secara ascending (1,2,3...)
    $query .= " ORDER BY queue_number ASC";

    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Get stats
    $statsQuery = "SELECT 
        COUNT(CASE WHEN status = 'new' THEN 1 END) as new_count,
        COUNT(CASE WHEN status = 'processing' THEN 1 END) as processing_count,
        COUNT(CASE WHEN status = 'completed' THEN 1 END) as completed_count
        FROM orders";
    
    $statsStmt = $pdo->query($statsQuery);
    $stats = $statsStmt->fetch(PDO::FETCH_ASSOC);

    echo json_encode([
        'success' => true,
        'orders' => $orders,
        'stats' => [
            'new' => (int)$stats['new_count'],
            'processing' => (int)$stats['processing_count'],
            'completed' => (int)$stats['completed_count']
        ]
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
