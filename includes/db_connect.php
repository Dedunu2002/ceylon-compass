<?php
$host = "localhost";
$user = "root"; // Default for XAMPP
$pass = "";     // Default for XAMPP
$db_name = "ceylon_compass";

$conn = new mysqli($host, $user, $pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8mb4 for emojis and special characters
$conn->set_charset("utf8mb4");
?>