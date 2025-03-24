<?php
$firstName = htmlspecialchars($_GET['firstName']);
$lastName = htmlspecialchars($_GET['lastName']);
$email = htmlspecialchars($_GET['email']);
$phone = htmlspecialchars($_GET['phone']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
</head>
<body>
    <h1>Welcome, <?php echo $firstName; ?>!</h1>
    <p>Here are your details:</p>
    <ul>
        <li>First Name: <?php echo $firstName; ?></li>
        <li>Last Name: <?php echo $lastName; ?></li>
        <li>Email: <?php echo $email; ?></li>
        <li>Phone: <?php echo $phone; ?></li>
    </ul>
</body>
</html>
