<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>DESARE REALTY : About Us</title>
	<link rel="stylesheet" href="aboutus.css">
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
		<img src="./images/1stimage.jpg" alt="1stimage">
	</div>
	
	<div class="greeting">
		<h1> Welcome to Desare Realty </h1>
	</div>
	
	<div class="container1">
		<div class="title1">
	
			<h2> ABOUT US</h2>
	
			<div class="text1">
				<img src="./images/2ndimage.jpg" alt="2ndimage"> 
				<div class="text-container">
				<p id="cptntitle1">Welcome to Desare Realty – Your Gateway to Exceptional Real Estate Experiences!</p>
				<br>
				<p>At Desare Realty, we redefine the way you perceive real estate by putting your dreams and 
				aspirations at the forefront. With a passion for connecting people with their ideal homes
				and investments,we have become a trusted name in the real estate industry. </p>
				</div>
			</div>
		</div>
		
		<div class="title2">
			<h3> OUR VISION </h3>
				<p>At Desare Realty, our vision serves as a guiding beacon, <br> illuminating the path toward a future where real <br> 
				estate transcends conventional boundaries. <br> We aspire to redefine the industry, empowering individuals, <br>
				families,and communities with exceptional real estate experiences.</p>
			<h3> OUR MISSION </h3>
				<p>At Desare Realty, we are driven by a clear and <br> unwavering mission – to transform the real estate experience <br>
				for our clients, bringing dreams to life and <br> creating lasting value for all stakeholders.</p>
		</div>
	</div>
	
	<div class="container2">
	
		<p id="whoarewe"> Who We Are: </p>
		<p> At Desare Realty, we are more than just a real estate platform; we are your partners in every step 
		of your real estate journey. Founded on principles of integrity, transparency, and client-centricity, 
		we are dedicated to delivering unparalleled service and fostering lasting relationships. </p>
		<ul> What Sets Us Apart:
			<li> Expertise: Our team of seasoned professionals brings extensive industry knowledge to guide you
			through the complexities of real estate transactions. </li>
			<li> Personalized Approach: We understand that every client is unique. That's why we tailor our services
			to your individual needs, ensuring a personalized and stress-free experience. </li>
			<li> Cutting-Edge Technology: Embracing innovation, we leverage the latest technology to provide you 
			with seamless and efficient solutions, keeping you ahead in the real estate game. </li>
		</ul>
	
	</div>
	
	<button> <a href="get-in-touch.html" style="text-decoration: none; color: white;">Contact Us</a>  </button>

		
	
</body>
</html>
