<?php
$host = "localhost";
$user = "root";  // Default for XAMPP
$pass = "";      // No password by default
$dbname = "formdata";

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>