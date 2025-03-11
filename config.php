<?php

$host = "localhost"; // Change if using a remote database
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$database = "shopping";

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
