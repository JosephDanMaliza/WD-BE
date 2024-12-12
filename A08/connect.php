<?php

$dbhost = "localhost:3307";
$dbuser = "root";
$dbpass = "";
$db = "corememories";

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Function to execute queries
function executeQuery($query){
    $conn = $GLOBALS['conn'];
    return mysqli_query($conn, $query);
}
?>
