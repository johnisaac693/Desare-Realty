<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>DESARE REALTY : House Listing Form</title>
	<link rel="stylesheet" href="house-listing-form-style.css">
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
	
	<h1>House Listing Form</h1>
	
	<form method = "post">
		<h2>Property Information</h2>
		<div class="form-group-2">
			<label for="price" class="price">Price</label>
            <input type="number" id="price" name="price">
        </div>
		<div class="form-group-3">
			<label for="property-type">Property Type:</label>
				<select id="property-type" name="property-type">
					<option value="" selected disabled>PLEASE SELECT</option>
					<option value="single">Single Attached</option>
					<option value="townhouse">Townhouse</option>
					<option value="condo">Condo</option>
					<option value="apartment">Apartment</option>
					<option value="bungalow">Bungalow</option>
					<option value="cabin">Cabin</option>
					<option value="house">House</option>
				</select>
        </div>
		<div class="form-group-2">
			<label for="address" class="address">Address</label>
            <input type="text" id="address" name="address">
        </div>
		<div class="form-group-3">
            <label for="bedrooms">Bedrooms</label>
            <input type="number" id="bedrooms" name="bedrooms" pattern="[0-9]+">
        </div>
		<div class="form-group-2">
            <label for="bathroom">Bathroom</label>
            <input type="number" id="bathroom" name="bathroom" pattern="[0-9]+">
        </div>
		<div class="form-group-3">
            <label for="approximate_sqm">Approximate sqm</label>
            <input type="number" id="approximate_sqm" name="approximate_sqm"pattern="[0-9]+">
        </div>
		<input type="submit" value = "Submit" name = "submit"></input>
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

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
		$email = $_SESSION['email']; 
		$price = $_POST['price']; 
		$address = $_POST['address']; 
		$bath = $_POST['bathroom']; 
		$bed = $_POST['bedrooms'];
		$housetype = $_POST['property-type'];
		$size = $_POST['approximate_sqm'];


		if (empty($_POST['price']) || empty($_POST['address']) || empty($_POST['bathroom']) || empty($_POST['bedrooms']) || empty($_POST['property-type']) || empty($_POST['approximate_sqm'])) {
			// At least one of the fields is empty
			echo "<script>alert('Error: Please fill in all required fields.');</script>";
		} else {
			echo "<script>alert('Property Created for " . $_SESSION['name'] . "');</script>";
			createListing($email, $price, $address, $bath, $bed, $housetype, $size);
			

		}
		

	}
     

?>

</html>
