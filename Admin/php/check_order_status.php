<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

require_once 'db_connection.php';

// Ambil data dari request
$data = json_decode(file_get_contents('php://input'), true);
$queueNumber = $data['queue_number'] ?? null;

if (!$queueNumber) {
    echo json_encode([
        'success' => false,
        'message' => 'Nomor antrian tidak valid'
    ]);
    exit;
}

try {
    // Cek status pesanan berdasarkan nomor antrian
    $stmt = $conn->prepare("SELECT status FROM orders WHERE queue_number = ?");
    $stmt->bind_param("s", $queueNumber);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $order = $result->fetch_assoc();
        echo json_encode([
            'success' => true,
            'status' => $order['status']
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Pesanan tidak ditemukan'
        ]);
    }
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Terjadi kesalahan: ' . $e->getMessage()
    ]);
}
?> 