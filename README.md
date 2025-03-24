Signup Form
Introduction:
This project is a basic Signup Form that allows users to register by providing their personal details such as name, email, phone number, and password. It validates the input fields and stores the submitted data in a database. After successful registration, users are redirected to a confirmation page displaying their entered details.

Features
Form Fields:
First Name: Only alphabets are allowed.
Last Name: Only alphabets are allowed.
Email: Valid email format required.

Phone Number:
Only numbers and + are allowed.
If + is included, exactly 13 digits (excluding +) are required.
If + is not included, exactly 10 digits are required.
Cannot start with 0.

Password:
Minimum length: 6.
Must include at least one alphabet, one number, and one special character (@, #, $, or &).
Repeat Password: Must match the Password field.
Validation: Both client-side and server-side validation to ensure secure and proper data input.
Database Storage: User data is stored securely in the database.

Confirmation Page:
Displays a welcome message with the user's first name.
Shows all submitted details dynamically.

Technologies Used
Frontend: HTML, CSS, JavaScript
Backend: PHP
Database: MySQL
Server Environment: XAMPP
