<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oceaanscoops";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset ke utf8
$conn->set_charset("utf8");
?> 