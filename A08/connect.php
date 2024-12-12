<?php

$dbhost = "localhost:3307";
$dbuser = "root";
$dbpass = "";
$db = "corememories";

// Test connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>
