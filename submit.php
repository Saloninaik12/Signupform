<?php
header('Content-Type: application/json');

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed.']);
    exit();
}

// Get form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

// Save to database
$stmt = $conn->prepare("INSERT INTO users (firstName, lastName, email, phone, password) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $firstName, $lastName, $email, $phone, $password);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'firstName' => $firstName, 'lastName' => $lastName, 'email' => $email, 'phone' => $phone]);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to save data.']);
}

$stmt->close();
$conn->close();
?>
