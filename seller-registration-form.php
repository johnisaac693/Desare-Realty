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
		<a href="homepage.html">Home</a>
		<a href="aboutus.html">About Us</a>
		<a href="get-in-touch.html">Contact Us</a>
        <a href="FAA.html">Find Agents</a> 
        <a href="news.html">News & Trends</a> 
        <a href="faq.html">FAQ</a>
        <div class="account">
            <img src="images/user.png" alt="User">
            <span><a href="#">Account</span></a> 
        </div>  
    </div>
	
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
		<button type="submit" name="register">Register</button>
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
session_start();

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

         // Store values in session variables
         $_SESSION['email'] = $email;
         $_SESSION['password'] = $password;

         // Redirect to homepage
         header('Location: profile.html');
         exit(); // Make sure to exit after a header redirect
      }
   }
}

?>


</html>
