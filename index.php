<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
</head>
<body>
    <div class="container">
<form class="form" action="register.php" method="POST">
<h1>Registration Form</h1>
    <!-- First Name -->`
    <div class="input-form">
        <label for="field6">First Name</label>
        <input id="field6" name="first_name" type="text" placeholder="Enter your first name" required>
    </div>
    <!-- Last Name -->
    <div class="input-form">
        <label for="field7">Last Name</label>
        <input id="field7" name="last_name" type="text" placeholder="Enter your last name" required>
        
    </div>
    
    <!-- CNIC/Bay-Form -->
    <div class="input-form">
        <label for="field8">CNIC</label>
        <input id="field8" name="cnic" type="text" placeholder="xxxxx-xxxxxxx-x" pattern="35202-\d{7}-\d"required>
        <small id="cnicError" style="color: red; display: none;">CNIC must be in the format xxxxx-xxxxxxx-x</small>
        
    </div>
    
    <!-- Date of Birth -->
    <div class="input-form">
        <label for="field9">Date of Birth</label>
        <input id="field9" name="dob" type="date" required>
    </div>
    
    <!-- City -->
    <div class="input-form">
        <label for="field10">City</label>
        <select id="field10" name="city" required>
            <option value="">Select your city</option>
            <option value="karachi">Karachi</option>
            <option value="lahore">Lahore</option>
            <option value="islamabad">Islamabad</option>
            <option value="peshawar">Peshawar</option>
            <option value="gujrawala">Gujrawala</option>
        </select>
    </div>
    
    <!-- Gender -->
    <div class="gen">
        <label id="der"><b>Gender:</b></label>
        <div class="ma">
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
        </div>
        <div class="ma">
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
        </div>
        <div class="ma">
            <input type="radio" id="transgender" name="gender" value="transgender">
            <label for="transgender">Transgender</label>
        </div>
    </div>
    
    <!-- Phone Number -->
    <div class="input-form">
        <label for="field11">Phone Number</label>
        <input id="field11" name="phone_number" type="tel" placeholder="Enter Phone Number" required maxlength="11">
    </div>
    
    <!-- Email -->
    <div class="input-form">
        <label for="field12">Email</label>
        <input id="field12" name="email" type="email" placeholder="Enter Email" required>
    </div>
    
    <!-- Password -->
    <div class="input-form password-field">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required minlength="6" maxlength="10">
        <button type="button" id="togglePassword">
            <span class="material-icons">visibility</span>
        </button>
    </div>
    
    <!-- Confirm Password -->
    <div class="input-form confirm-password-field">
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" id="confirmPassword" name="confirm_password" placeholder="Confirm Password" required minlength="6" maxlength="10" required>
        <button type="button" id="toggleConfirmPassword">
            <span class="material-icons">visibility</span>
        </button>
    </div>
    
    <!-- Submit Button -->
    <div class="input-form">
        <input id="field15" type="submit" value="Register">
    </div>
    
    <!-- Already Registered -->
    <div class="containersignin">
        <p>Already have an account? <a href="index.html">Login</a></p>
    </div>
</form>
</div>
</body>
</html>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Get elements
    let passwordInput = document.getElementById("password");
    let confirmPasswordInput = document.getElementById("confirmPassword");
    let togglePasswordBtn = document.getElementById("togglePassword");
    let toggleConfirmPasswordBtn = document.getElementById("toggleConfirmPassword");
    let form = document.querySelector(".form");
    let cnicInput = document.getElementById("field8");
    let cnicError = document.getElementById("cnicError");

    // Function to toggle password visibility
    function togglePassword(input, button) {
        if (input.type === "password") {
            input.type = "text";
            button.innerHTML = '<span class="material-icons">visibility_off</span>'; // Change icon
        } else {
            input.type = "password";
            button.innerHTML = '<span class="material-icons">visibility</span>'; // Change icon
        }
    }

    // Toggle password visibility on button click
    togglePasswordBtn.addEventListener("click", function () {
        togglePassword(passwordInput, togglePasswordBtn);
    });

    toggleConfirmPasswordBtn.addEventListener("click", function () {
        togglePassword(confirmPasswordInput, toggleConfirmPasswordBtn);
    });

    // Form submission validation
    form.addEventListener("submit", function (event) {
        if (passwordInput.value !== confirmPasswordInput.value) {
            alert("Passwords do not match. Please try again.");
            event.preventDefault(); // Prevent form submission
        }
        // Check CNIC format
        let cnicPattern = "35202-\d{7}-\d";
        if (!cnicPattern.test(cnicInput.value)) {
            cnicError.style.display = "block";
            event.preventDefault(); // Prevent form submission
        } else {
            cnicError.style.display = "none";
        }
    });
});
</script>