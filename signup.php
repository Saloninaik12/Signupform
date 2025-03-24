<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BODHAMI-SIGNUP FORM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="registration-container">
        <h2>SIGNUP FORM</h2>
        <form class="registration-form" id="signupForm" action="post">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required pattern="[A-Za-z]+" title="Only alphabets allowed">

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required pattern="[A-Za-z]+" title="Only alphabets allowed">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required title="Format: + followed by 12 digits OR 10 digits without +">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required minlength="6" title="Minimum 6 characters with at least 1 letter, 1 number, and 1 special character (@#$&!)">

            <label for="repeatPassword">Confirm Password:</label>
            <input type="text" id="repeatPassword" name="repeatPassword" required>

            <button type="submit" id="submitButton">SIGNUP</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>