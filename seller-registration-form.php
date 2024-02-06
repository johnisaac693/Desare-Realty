<?php
session_start();

// Check if the user is already logged in
if(isset($_SESSION['email'])) {
    // User is logged in, display a popup and redirect to homepage
    echo "<script>
            var logout = confirm('You are already logged in. Please log out first to access the registration form.');
            if (logout) {
                window.location.href = 'logout.php';
            } else {
                window.location.href = 'homepage.php';
            }
          </script>";
    exit(); // Make sure to exit after displaying the popup
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>DESARE REALTY : Seller Registration Form</title>
	<link rel="stylesheet" href="seller-registration-form-style.css">
	<link rel="stylesheet" href="nav and foot.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
</head>
<body>

<div class="navbar">
		<img src="images/logo.jpg" alt="Logo">
		<a href="homepage.php">Home</a>
		<a href="properties.php"></a>
		<a href="aboutus.php">About Us</a>
		<a href="get-in-touch.php">Contact Us</a>
		<a href="location.php">Find Us</a>
        <a href="FAA.php">Find Agents</a> 
        <a href="news.php">News & Trends</a> 
        <a href="faq.php">FAQ</a>
        <a href="profile.php">Seller Profile</a>
        <div class="account">
            <img src="images/user.png" alt="User">
            <span><a href="#" onclick="handleAccountClick()">Account</a></span>

        </div>  
    </div>

	<script>
		function handleAccountClick() {
    		<?php
   				 if(isset($_SESSION['email'])) {
       		 		echo "var logout = confirm('You are already logged in. Do you want to log out?');";
       		 		echo "if (logout) { window.location.href = 'logout.php'; }";
		
    				} else {
       		 			echo "var loginOrSignup = confirm('Please log in or sign up.');";
        				echo "if (loginOrSignup) { window.location.href = 'login.php'; } else { return false; }";
   			 		}
    		?>
		}
	</script>
	
	<div class="background">
		<img src="images/bg-seller.jpg" alt="background">
		<h1>Become a Seller</h1>
		<p>"Unlock a seamless selling experiences with us. Become a seller<br>today and let us guide you to success in the real estate market."</p>
	</div>
	
	<h1>Seller Registration Form</h1>
	
	<form method="post">
		<div class="form-group">
			<label for="fname">Full Name</label>
			<input type="text" id="fname" name="fname">
		</div>
		<div class="form-group">
			<label for="contact_number">Contact Number</label>
			<input type="text" id="contact_number" name="contact_number">
		</div>
		<div class="form-group">
			<label for="email">Email Address</label>
			<input type="text" id="email" name="email">
		</div>
		<div class="form-group">
			<label for="home">Complete Address</label>
			<input type="text" id="home" name="home">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" id="password" name="password">
		</div>
		<input type="submit" name="register" value = "Register"></input>
	</form>
	
	
	<div class="footer">
		<div class="footer-logo">
			<img src="images/fb.png" alt="Facebook">
			<img src="images/in.png" alt="LinkedIn">
			<img src="images/ig.png" alt="Instagram">
		</div>
		<div class="footer-buttons">
			<a href="#">About Us</a>
			<a href="#">Frequently Asked Questions</a> 
		</div>
    </div>
</body>
<?php

	include 'functions.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
   $name = $_POST['fname']; // Corrected to 'fname' from 'name'
   $email = $_POST['email'];
   $phonenum = $_POST['contact_number'];
   $address = $_POST['home'];
   $password = $_POST['password'];

   if (empty($email) || empty($password) || empty($phonenum) || empty($address)) { 
    echo '<script>alert("Invalid input Detected!");</script>';
   } else {
      if (duplicateUserCheck($email)) {
         echo '<script>alert("User Already Exists!");</script>';
      } else {
         // Register the user and store values in session variables
         registerUser($name, $email, $phonenum, $address, $password);
		echo'<script>alert("User Registered!")</script>';
         // Store values in session variables
         $_SESSION['email'] = $email;
         $_SESSION['password'] = $password;
		 $_SESSION['name'] = $name;

         // Redirect to homepage
         header('Location: profile.php');
         exit(); // Make sure to exit after a header redirect
      }
   }
	}

?>


</html>
