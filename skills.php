<?php
header('Content-Type: application/json');
include '../database.php'; // Include your database connection

$skills = getSkills($conn);
echo json_encode($skills); // Convert skills array to JSON format
$conn->close();
?>
