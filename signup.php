<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <!-- Link to an external CSS file for styling -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Main container for the signup form -->
    <div class="registration-container">
        <h2>Sign Up Form</h2>
        <!-- Form to collect user details -->
        <form id="signupForm" class="registration-form">
            <!-- First Name input -->
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required pattern="[A-Za-z]+" title="Only alphabets allowed">

            <!-- Last Name input -->
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required pattern="[A-Za-z]+" title="Only alphabets allowed">

            <!-- Email input -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <!-- Phone number input -->
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required pattern="(\+[1-9][0-9]{12}|[1-9][0-9]{9})" 
                   title="Enter a valid phone number. Format: + followed by 12 digits or 10 digits without +, not starting with 0">

            <!-- Password input -->
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required minlength="6" 
                   title="Password must have at least 1 letter, 1 number, and 1 special character (@#$&!)">

            <!-- Repeat password input -->
            <label for="repeatPassword">Confirm Password:</label>
            <input type="password" id="repeatPassword" name="repeatPassword" required>

            <!-- Submit button -->
            <button type="submit">Sign Up</button>
        </form>
    </div>
    <!-- JavaScript for form validation and submission -->
    <script src="script.js"></script>
</body>
</html>
