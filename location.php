<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>DESARE REALTY : Location</title>
    <link rel="stylesheet" href="location.css">
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

    <div class="visit">
        <h1>VISIT US TODAY</h1>
    </div>
	
	<div class="container1">
		<div class="google-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d471.38533007096083!2d121.06090881152133!3d14.334556314322679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d793fe99004d%3A0x807969cde4449d10!2sMonterey%20Community%20Market%20-%20Halang%20Bi%C3%B1an!5e0!3m2!1sen!2sph!4v1705807174887!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<div class="container2">
		<p>
			<h1>RJ TITUS</h1>
			<h2>commercial bldg,<br>Brgy. San Francisco, <br>City of Binan, Laguna <br>+639123456789</h2>
			<br>
			<br>
			<h3>
			Find us on RJ TITUS commercial blgd located at the 2nd Floor near Monterey  <br>  
			Meatshop. Explore with us—your trusted realty partner. We're here to assist and <br> 
			guide you every step of the way. Just visit us to start your property journey!</h3>
		</p>
		</div>
	</div>
	
	<div class = "container3">
		<h2> OFFICE HOURS </h2>
		<div class = "inscon3">
			<div class="sched">
				<h4> MON-SAT </h4> 
				<h4>SUN </h4>
			</div>
			<div class="sched">
				<h4> 8AM - 5PM </h4> 
				<h4>10AM - 3PM </h4>
			</div>
		</div>
	</div>
	
	
</body>
</html>
