<?php
session_start();

// Check if user data exists in session
if (!isset($_SESSION['user'])) {
    header('Location: signup.html');
    exit();
}

// Get user data from session
$user = $_SESSION['user'];
$firstName = htmlspecialchars($user['firstName']);
$lastName = htmlspecialchars($user['lastName']);
$email = htmlspecialchars($user['email']);
$phone = htmlspecialchars($user['phone']);

// Clear the session data
unset($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .registration-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        h2 {
            color: #4CAF50;
        }
        #userDetails {
            margin: 20px 0;
            text-align: left;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 4px;
        }
        #userDetails p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <h2>Registration Successful!</h2>
        <div id="userDetails">
            <p><strong>First Name:</strong> <?= $firstName ?></p>
            <p><strong>Last Name:</strong> <?= $lastName ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>
            <p><strong>Phone:</strong> <?= $phone ?></p>
        </div>
        <p>Thank you for registering with us.</p>
    </div>
</body>
</html>