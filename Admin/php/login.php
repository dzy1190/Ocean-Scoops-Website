<?php
session_start();

// Set headers
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

try {
    require_once 'config.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['adminEmail'] ?? '';
        $password = $_POST['adminPassword'] ?? '';

        if (empty($email) || empty($password)) {
            throw new Exception('Email dan password harus diisi');
        }

        // Debug input
        error_log("Login attempt - Email: $email");

        $stmt = $pdo->prepare("SELECT * FROM admin WHERE email = ? LIMIT 1");
        $stmt->execute([$email]);
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        // Debug admin data
        error_log("Admin data found: " . json_encode($admin));

        if ($admin) {
            $passwordVerified = password_verify($password, $admin['password']);
            error_log("Password verification result: " . ($passwordVerified ? "true" : "false"));

            if ($passwordVerified) {
                $_SESSION['admin_id'] = $admin['id'];
                $_SESSION['admin_email'] = $admin['email'];
                
                echo json_encode([
                    'success' => true,
                    'message' => 'Login berhasil'
                ]);
                return;
            }
        }

        // Jika login gagal
        echo json_encode([
            'success' => false,
            'message' => 'Email atau password salah'
        ]);

    } else {
        http_response_code(405);
        echo json_encode([
            'success' => false,
            'message' => 'Method not allowed'
        ]);
    }
} catch (Exception $e) {
    error_log("Login error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
