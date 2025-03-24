// When the form is submitted
document.getElementById('signupForm').onsubmit = async function(e) {
    // Stop the form from submitting normally
    e.preventDefault();
  
    // Get all the values from the form
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var password = document.getElementById('password').value;
    var repeatPassword = document.getElementById('repeatPassword').value;
  
    // Check first name (only letters)
    if (!firstName.match(/^[A-Za-z]+$/)) {
      alert("First name can only have letters");
      return false;
    }
  
    // Check last name (only letters)
    if (!lastName.match(/^[A-Za-z]+$/)) {
      alert("Last name can only have letters");
      return false;
    }
  
    // Check email looks right
    if (!email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
      alert("Please enter a proper email address");
      return false;
    }
  
    // Check phone number
    if (!phone.match(/^(\+[1-9][0-9]{12}|[1-9][0-9]{9})$/)) {
      alert("Phone must be:\n- + and 12 numbers after (13 total)\nOR\n- 10 numbers without +\nCan't start with 0");
      return false;
    }
  
    // Check password length
    if (password.length < 6) {
      alert("Password needs to be at least 6 letters");
      return false;
    }
  
    // Check password has a letter
    if (!password.match(/[A-Za-z]/)) {
      alert("Password needs at least one letter");
      return false;
    }
  
    // Check password has a number
    if (!password.match(/[0-9]/)) {
      alert("Password needs at least one number");
      return false;
    }
  
    // Check password has special character
    if (!password.match(/[@#$&!]/)) {
      alert("Password needs at least one special character @ # $ & !");
      return false;
    }
  
    // Check passwords match
    if (password !== repeatPassword) {
      alert("Your passwords don't match!");
      return false;
    }
  
    // If everything is good, send the data
    try {
      // Make an object with all the user data
      var userData = {
        first: firstName,
        last: lastName,
        email: email,
        phone: phone,
        pass: password
      };
  
      // This is where we would normally send to a server
      console.log(userData);
  
      // For now, just show success and go to confirmation page
      alert("SIGN UP SUCCESSFULL!");
      window.location = "submit.php";
  
    } catch(error) {
      console.log("Something went wrong:", error);
      alert("Oops! Something went wrong. Please try again.");
    }
  };
