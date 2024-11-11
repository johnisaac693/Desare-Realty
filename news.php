<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>DESARE REALTY : News</title>
	<link rel="stylesheet" href="news-style.css">
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
		<a href = "rice.html">
			<img src="images/rice.jpg" alt="background">
			<div class="bginfo">
				<h1>Philippines, Vietnam seal deals on South China Sea security, rice</h1>
				<p class="info">HANOI — The Philippines and Vietnam agreed on Tuesday to boost cooperation among their coastguards and to prevent untoward incidents in the South China Sea, in an announcement during a state visit by Philippine President Ferdinand Marcos Jr.</p>
				<p class="date">Published January 30, 2024</p>
				<button>READ MORE</button>
			</div>
		</a>
	</div>
	
	<div class="sides">
		<a href = "IU.html">
			<div class="side-group">
				<h2>TRENDING</h2>
				<p class="side-info">IU and Park Bo Gum to star in new Netflix series 'When Life Gives You Tangerines'.</p>
				<p class="side-author">Published January 30, 2024</p>
			</div>
		</a>
		<a href = "Taylor.html">
			<div class="side-group">
				<p class="side-info">Taylor Swift at Super Bowl could be a game time decision</p>
				<p class="side-author">Published January 30, 2024</p>
			</div>
		</a>
		<a href = "galaxy.html">
			<div class="side-group">
				<p class="side-info">Webb telescope captures 'stunning' images of 19 spiral galaxies</p>
				<p class="side-author">Published January 30, 2024</p>
			</div>
		</a>
		<a href = "Kate.html">
			<div class="side-group">
				<p class="side-info">Kate, Princess of Wales, back home after surgery.</p>
				<p class="side-author">Published January 29, 2024</p>
			</div>
		</a>
		<a href = "Lisa.html">
			<div class="side-group">
				<p class="side-info">Blackpink's Lisa dazzles in gold ensemble for Paris performance.</p>
				<p class="side-author">Published January 28, 2024</p>
			</div>
		</a>
		<a href = "SB19.html">
			<div class="side-group">
				<p class="side-info">SB19's Japan concert is finally happening in April</p>
				<p class="side-author">Published January 26, 2024</p>
			</div>
		</a>
		<a href = "ITZY.html">
			<div class="side-group">
				<p class="side-info">ITZY is returning to Manila for a concert in August</p>
				<p class="side-author">Published January 26, 2024</p>
			</div>
    </a>
	</div>
	
	<div class="breaking-news">
		<h3>Breaking News</h3>
		<div class="news-group-left">
			<div class="news-group">
				<a href = "resemblance.html">
					<img src="images/resemblance.png" alt="resemblance">
					<div class="news-info">
						<p class="info">Ambeth Ocampo takes notice of museum visitor who bears an uncanny resemblance to his mom.</p>
						<p class="date">Published January 30, 2024</p>
					</div>
				</a>
			</div>
			<div class="news-group">
				<a href = "skate.html">
					<img src="images/skate.jpg" alt="skate">
					<div class="news-info">
						<p class="info">Russian skater Valieva banned for doping, ROC loses Olympic gold — CAS.</p>
						<p class="date">Published January 29, 2024</p>
					</div>
				</a>
			</div>
			<div class="news-group">
				<a href = "basketball.html">
					<img src="images/basketball.jpeg" alt="basketball">
					<div class="news-info">
						<p class="info">Gilas, Tim Cone await Justin Brownlee's FIBA clearance as Asia Cup qualifiers loom.</p>
						<p class="date">Published January 30, 2024</p>
					</div>
        </a>
			</div>
		</div>
		
		<div class="news-group-right">
			<div class="news-group">
				<a href = "benguet.html">
					<div class="news-info">
						<p class="info">Benguet logs coldest temperature on January 29.</p>
						<p class="date">Published January 30, 2024</p>
					</div>
					<img src="images/benguet.jpg" alt="benguet">
				</a>
			</div>
			<div class="news-group">
				<a href = "agri.html">
					<div class="news-info">
						<p class="info">PH agri output slightly up in 2023.</p>
						<p class="date">Published January 30, 2024</p>
					</div>
					<img src="images/agri.jpg" alt="agri">
				</a>
			</div>
			<div class="news-group">
				<a href = "amihan.html">
					<div class="news-info">
						<p class="info">Amihan, LPA's trough to bring rains over parts of PH.</p>
						<p class="date">Published January 30, 2024</p>
					</div>
					<img src="images/amihan.jpg" alt="amihan">
        </a>
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
	
</body>
<script>
	
</script>
</html>
