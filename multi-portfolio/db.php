<?php
$host = "localhost";
$user = "root"; // default XAMPP MySQL user
$pass = "";     // leave empty unless you set a password
$db   = "portfolio_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
