<?php
$servername = "localhost";
$username = "your_username"; // replace with your username
$password = "your_password"; // replace with your password
$dbname = "cv_portfolio"; // replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
