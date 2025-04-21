<?php
require_once 'config.php';

try {
    // Hapus data admin yang lama
    $pdo->exec("TRUNCATE TABLE admin");
    
    // Buat admin baru
    $email = 'dzikry1190@gmail.com';
    $password = 'admin123';
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    $stmt = $pdo->prepare("INSERT INTO admin (email, password) VALUES (?, ?)");
    $stmt->execute([$email, $hashedPassword]);
    
    echo "Admin berhasil dibuat!<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";
    echo "Hashed Password: " . $hashedPassword;
    
} catch(PDOException $e) {
    die("Error: " . $e->getMessage());
} 