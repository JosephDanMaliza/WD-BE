<?php
$dbhost = "localhost:3307";
$dbuser = "root";
$dbpass = "";
$dbname = "corememories";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function executeQuery($query) {
    global $conn;
    return $conn->query($query);
}
?>
