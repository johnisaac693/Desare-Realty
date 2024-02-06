<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>DESARE REALTY : Profile</title>
	<link rel="stylesheet" href="profile-style.css">
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
	
	<div class="profile">
		<img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="profile">
		<?php
		$seshName = $_SESSION['name'];
		echo '<h1 class="profilename">' . $seshName . '</h1>';
		?>
		
	</div>
	
	<div class="properties">
		<h2>Active Listings</h2>
			<div class="property-listing">
				<?php 
				include 'functions.php';
				$email = $_SESSION['email'];
				getListing($email);
				?>
				
	</div>
	
	<div class="properties">
		<h2>Sold Listings</h2>
			<div class="property-listing">
				<div class="property-card">
					<img src="images/sold.jpg" alt="Sold House">
					<div class="description">
						<p>₱3,150,000</p>
						<p>Single Attached</p>
						<p>San Antonio, Biñan, Laguna</p>
					</div>
					<div class="info">
						<img src="images/bed.png" alt="Bed" class="bed"><p class="bed">3</p>
						<img src="images/shower.png" alt="Shower" class="shower"><p class="shower">2</p>
						<img src="images/sqm.png" alt="sqm" class="sqm"><p class="sqm">55m2</p>
					</div>
					<label class="sold">SOLD!</label>
				</div>
			</div>
	</div>
	
	<button class="btnNewListing"><a href="house-listing-form.php" style = "text-decoration: none; color: white;">Create new listing</a></button>
	
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
	
		<script>
    function deleteProperty(email, address) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "delete_property.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    if (xhr.responseText === "success") {
                        var propertyCard = document.querySelector('.property-card[data-email="' + email + '"][data-address="' + address + '"]');
                        if (propertyCard) {
                            propertyCard.parentNode.removeChild(propertyCard);
                        }
                    } else {
                        alert("Failed to delete property." + xhr.status);
                    }
                } else {
                    alert("Failed to delete property. Error: " + xhr.status);
                }
            }
        };
        xhr.send("email=" + email + "&address=" + encodeURIComponent(address));
    }
</script>



		
</body>

<?php
if(!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['name'])) {

	header('Location: homepage.php');
	exit();
}
?>



</html>