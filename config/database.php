<?php
// config/database.php

// variable nyimpen detail server database
$servername = "mysql";
$username = "root"; // Username default XAMPP
$password = "root"; // Password default XAMPP kosong
$dbname = "pizzeria";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
