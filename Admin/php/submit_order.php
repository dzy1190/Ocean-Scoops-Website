<?php
ob_start(); // Mulai output buffering
error_reporting(E_ALL);
ini_set('display_errors', 0);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

require_once 'config.php';

try {
    // Terima data JSON
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if (!$data) {
        throw new Exception('Invalid JSON data');
    }

    // Validasi data yang diperlukan
    $requiredFields = ['product_name', 'quantity', 'toppings', 'total_price'];
    foreach ($requiredFields as $field) {
        if (!isset($data[$field])) {
            throw new Exception("Missing required field: $field");
        }
    }

    // Generate order ID
    $orderId = 'ORD-' . date('Ymd') . '-' . substr(uniqid(), -4);
    
    // Dapatkan nomor antrian untuk hari ini
    $stmt = $pdo->prepare("
        SELECT COALESCE(MAX(queue_number), 0) as last_queue 
        FROM orders 
        WHERE DATE(order_date) = CURRENT_DATE()
    ");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $queueNumber = $result['last_queue'] + 1;

    // Insert ke database dengan nomor antrian yang berurutan
    $stmt = $pdo->prepare("
        INSERT INTO orders (
            order_id,
            queue_number,
            product_name,
            quantity,
            toppings,
            total_price,
            status,
            order_date
        ) VALUES (?, ?, ?, ?, ?, ?, 'new', CURRENT_TIMESTAMP)
    ");

    $stmt->execute([
        $orderId,
        $queueNumber,
        $data['product_name'],
        $data['quantity'],
        $data['toppings'],
        $data['total_price']
    ]);

    ob_clean(); // Bersihkan output buffer
    echo json_encode([
        'success' => true,
        'message' => 'Pesanan berhasil dibuat',
        'order_id' => $orderId,
        'queue_number' => $queueNumber
    ]);

} catch (Exception $e) {
    error_log('Order error: ' . $e->getMessage());
    ob_clean(); // Bersihkan output buffer
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Error: ' . $e->getMessage()
    ]);
} 