<?php
$servername = "localhost:3307"; // Change to 3306 if applicable
$username = "root";
$password = "";
$database = "corememories";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully!";
?>
