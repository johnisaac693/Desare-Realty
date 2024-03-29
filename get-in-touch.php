<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>DESARE REALTY : Get In Touch</title>
	<link rel="stylesheet" href="get-in-touch-style.css">
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
		<img src="images/bg-contact.png" alt="background">
	</div>
	
	<div class="contact">
		<h1>CONTACT US</h1>
		<p>Tell us your needs,
		<br>
		and we'll be happy to lend a hand.
		</p>
		
		<form>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" id="email" name="email" placeholder="ENTER A VALID EMAIL ADDRESS">
			</div>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" placeholder="ENTER YOUR NAME">
			</div>
			<div class="form-group-1">
				<textarea rows="8" cols="45" id="message" name="message" placeholder="Message..." autocomplete="off"></textarea>
			</div>
			<button type="submit">SUBMIT</button>
		</form>
	</div>
	
	
	
	<div class="contacts">
		<div class="links">
			<img src="images/location.png" alt="location">
			<div class="desc" onclick="openPopup('popup')">
				<h4>OUR OFFICE LOCATION</h4>
				<p>RJ TITUS Commercial Bldg., 
				<br>
				Brgy. San Francisco,
				<br>
				City of Biñan, Laguna
				</p>
			</div>
				<div id="popup" class="popup">
					<div class="content">
						<span class="close" onclick="closePopup()">&times;</span>
						<h1 style="text-align: center; font-family: 'Inter', sans-serif; font-size: 40px;">OUR OFFICE LOCATION</h1>
						<p style="text-align: center; font-family: 'Inter', sans-serif; font-size: 30px;">RJ TITUS Commercial Bldg., Brgy. San Francisco, City of Biñan, Laguna</p>
						<iframe width="100%" height="400px" src="https://www.openstreetmap.org/export/embed.html?bbox=121.05983287096025%2C14.333659868536104%2C121.06188744306567%2C14.335161919663836&amp;layer=mapnik&amp;marker=14.334410895357765%2C121.06086015701294" style="border: 2px solid black"></iframe>
					</div>
				</div>
		</div>		 
		<div class="links">
			<img src="images/fbpage.png" alt="fbpage">
			<div class="desc">
				<h4>FACEBOOK PAGE</h4>
				<a href="https://www.facebook.com/desarerealtyofficial">DESARE REALTY</a>
			</div>
		</div>
		<div class="links">
			<img src="images/phone.png" alt="phone">
			<div class="desc">
				<h4>TELEPHONE NUMBER</h4>
				<p>09351236549 (Smart)</p>
				<p>09057894123 (Globe)</p>
				<p>+91232528987 (Landline)</p>
			</div>
		</div>
	</div>
	
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
	
	<script src="get-in-touch-script.js"></script>
	
</body>
<script>

</script>
</html>
