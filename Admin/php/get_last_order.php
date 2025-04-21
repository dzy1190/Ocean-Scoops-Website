<?php
// Set header untuk response JSON
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

// Mulai session
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config.php';

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        throw new Exception("Koneksi database gagal: " . $conn->connect_error);
    }

    // Ambil pesanan terakhir tanpa filter status
    $sql = "SELECT * FROM orders 
            ORDER BY order_date DESC 
            LIMIT 1";

    $result = $conn->query($sql);

    if (!$result) {
        throw new Exception("Error dalam query: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        $order = $result->fetch_assoc();
        
        $response = [
            'success' => true,
            'order' => [
                'id' => $order['id'],
                'product_name' => $order['product_name'],
                'quantity' => $order['quantity'],
                'toppings' => $order['toppings'],
                'total_price' => $order['total_price'],
                'status' => $order['status'],
                'queue_number' => $order['queue_number'],
                'created_at' => $order['created_at']
            ]
        ];
    } else {
        $response = [
            'success' => true,
            'order' => null,
            'message' => 'Tidak ada pesanan'
        ];
    }

    $conn->close();
    
    // Pastikan tidak ada output lain sebelum JSON
    ob_clean();
    echo json_encode($response);
    exit;

} catch (Exception $e) {
    error_log("Error: " . $e->getMessage());
    ob_clean();
    echo json_encode([
        'success' => false,
        'message' => 'Terjadi kesalahan saat mengambil data pesanan: ' . $e->getMessage()
    ]);
    exit;
}
?>