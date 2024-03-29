<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>DESARE REALTY : Properties</title>
	<link rel="stylesheet" href="properties-style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
	<link rel="stylesheet" href="nav and foot.css">
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
	
	
	<div class="FindProperty">
		<h1 class="pagetitle">FIND YOUR DREAM PROPERTY</h1>
		<!-- <form>
			<div class="form-group">
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
			
			<div class="form-group">
				<label for="location">Location:</label>
				<select id="location" name="location">
					<option value="" selected disabled>PLEASE SELECT</option>
					<option value="Biñan">Biñan</option>
					<option value="Bungahan">Bungahan</option>
					<option value="Canlalay">Canlalay</option>
					<option value="Casile">Casile</option>
					<option value="Dela Paz">Dela Paz</option>
					<option value="Ganado">Ganado</option>
					<option value="Langkiwa">Langkiwa</option>
					<option value="Loma">Loma</option>
					<option value="Malaban">Malaban</option>
					<option value="Malamig">Malamig</option>
					<option value="Mampalasan">Mampalasan</option>
					<option value="Platero">Platero</option>
					<option value="Poblacion">Poblacion</option>
					<option value="San Antonio">San Antonio</option>
					<option value="San Francisco">San Francisco</option>
					<option value="San Jose">San Jose</option>
					<option value="San Vicente">San Vicente</option>
					<option value="Sto. Domingo">Sto. Domingo</option>
					<option value="Soro-Soro">Soro-Soro</option>
					<option value="Sto. Niño">Sto. Niño</option>
					<option value="Sto. Tomas">Sto. Tomas</option>
					<option value="Timbao">Timbao</option>
					<option value="Tubigan">Tubigan</option>
					<option value="Zapote">Zapote</option>
				</select>
			</div>

			<div class="form-group">
				<label for="price-range">Price Range:</label>
				<select id="price-range" name="price-range">
					<option value="" selected disabled>PLEASE SELECT</option>
					<option value="<1M">Less than 1M</option>
					<option value="1M-2M">1M-2M</option>
					<option value="2M-3M">2M-3M</option>
					<option value="3M-4M">3M-4M</option>
					<option value="4M-5M">4M-5M</option>
				</select>
			</div>

			<input class="property-search" type="submit" value="SEARCH">
		</form> -->
		
		<div class="properties">
			<h2>Houses and Residences</h2>
			<a href="#">Browse to see properties that you like</a>
			<div class="property-listing">
				<div class="property-card">
					<label class="new">New!</label>
					<img src="images/H1.jpg" alt="House 1">
					<div class="description">
						<p>₱3,000,000</p>
						<p>Single Attached</p>
						<p>South Spring, Canlalay, Biñan, Laguna</p>
					</div>
					<div class="info">
						<img src="images/bed.png" alt="Bed" class="bed"><p class="bed">3</p>
						<img src="images/shower.png" alt="Shower" class="shower"><p class="shower">2</p>
						<img src="images/sqm.png" alt="sqm" class="sqm"><p class="sqm">43m2</p>
					</div>
					<button onclick="openPopup('popup1')">VIEW</button>
						<div id="popup1" class="popup">
							<div class="content">
								<span class="close" onclick="closePopup()">&times;</span>
								<img src="images/H1.jpg" alt="House 1">
								<p>
								Say Goodbye to Compromises with the Zapote Model Home. Finally, a home that solves it all. With 3 bedrooms, 2 baths, and space for your car, laundry, and more, the Zapote Model Home is your answer to seamless living.
								<br><br>
								Tired of clutter? Open layout harmonizes your living, dining, and kitchen areas. No more juggling space, just pure comfort and convenience. Say hello to the solution you've been waiting for.
								<br><br><br>
								For more details, tripping and online reservation, kindly contact or send a message:
								<br><br>
								- 09695151338
								<br>
								- jaby.almadin23@gmail.com
								</p>
							</div>
						</div>
				</div>
				<div class="property-card">
					<label class="new">New!</label>
					<img src="images/H2.jpg" alt="House 2">
					<div class="description">
						<p>₱3,000,000</p>
						<p>Townhouse</p>
						<p>Vista Rosa, Soro-Soro, Biñan, Laguna</p>
					</div>
					
					<div class="info">
						<img src="images/bed.png" alt="Bed" class="bed"><p class="bed">2</p>
						<img src="images/shower.png" alt="Shower" class="shower"><p class="shower">1</p>
						<img src="images/sqm.png" alt="sqm" class="sqm"><p class="sqm">30m2</p>
					</div>
					<button onclick="openPopup('popup2')">VIEW</button>
						<div id="popup2" class="popup">
							<div class="content">
								<span class="close" onclick="closePopup()">&times;</span>
								<img src="images/H2.jpg" alt="House 2">
								<p>
								Discover the Nangka Model House here at Privado Homes: Your Dream Home for Young Families! 
								<br><br>
								With 2 Bedrooms and Carport provision, this charming abode is the perfect home for young families. Reserve the Nangka Model House now for only P20K! Plus, take advantage of our limited promo 36-month equity offer, providing you with more budget flexibility.
								<br><br>
								Don't miss out on this incredible opportunity.
								<br><br>
								Contact us today for a sample quotation!
								</p>
							</div>
						</div>
				</div>
				<div class="property-card">
					<img src="images/H3.jpg" alt="House 3">
					<div class="description">
						<p>₱2,800,000</p>
						<p>Single Attached</p>
						<p>Timbao, Biñan, Laguna</p>
					</div>
					
					<div class="info">
						<img src="images/bed.png" alt="Bed" class="bed"><p class="bed">3</p>
						<img src="images/shower.png" alt="Shower" class="shower"><p class="shower">2</p>
						<img src="images/sqm.png" alt="sqm" class="sqm"><p class="sqm">50m2</p>
					</div>
					<button onclick="openPopup('popup3')">VIEW</button>
						<div id="popup3" class="popup">
							<div class="content">
								<span class="close" onclick="closePopup()">&times;</span>
								<img src="images/H3.jpg" alt="House 3">
								<p>
								Welcome to the Anonas Model House!
								<br><br>
								This stunning corner house is perfect for growing families and those that demand space with their lifestyle.
								<br><br>
								As you step inside, a welcoming living room and dining area provide optimal space for family and entertainment, while the adjacent kitchen offers convenient meal preparation.   The main floor also features an accessible Toilet and Bath for guest and family use.  Step outside and find the Carport and the Laundry area.   It also has a lawn space, which can be an ideal setting for a weekend barbecue or a morning coffee in your pocket garden.
								<br><br>
								The second floor is dedicated to three bedrooms and another modern toilet and bath for residents' comfort and convenience. The highlight of this floor is the spacious Master Bedroom, which includes a walk-in closet and split-type AC for ultimate relaxation after a long day.
								</p>
							</div>
						</div>
				</div>
				<div class="property-card">
					<img src="images/H4.jpg" alt="House 4">
					<div class="description">
						<p>₱3,200,000</p>
						<p>Single Attached</p>
						<p>South Spring, Canlalay, Biñan, Laguna</p>
					</div>
					
					<div class="info">
						<img src="images/bed.png" alt="Bed" class="bed"><p class="bed">3</p>
						<img src="images/shower.png" alt="Shower" class="shower"><p class="shower">2</p>
						<img src="images/sqm.png" alt="sqm" class="sqm"><p class="sqm">55m2</p>
					</div>
					<button onclick="openPopup('popup4')">VIEW</button>
						<div id="popup4" class="popup">
							<div class="content">
								<span class="close" onclick="closePopup()">&times;</span>
								<img src="images/H4.jpg" alt="House 4">
								<p>
								Start your journey to a cozy and comfortable home with Rimas Model House.  The perfect starter option for families seeking a budget-friendly 3BR home. 
								<br><br>
								Fall in love with our modern and functional design, and enjoy quality living here at Privado Homes.
								<br><br>
								Book your viewing now and discover your dream home with Rimas Model House.
								</p>
							</div>
						</div>
				</div>
			</div>

			<div class="property-listing">
				<div class="property-card">
					<label class="new">New!</label>
					<img src="images/H6.jpg" alt="House 6">
					<div class="description">
						<p>₱1,800,000</p>
						<p>Single Attached</p>
						<p>San Antonio, Biñan, Laguna</p>
					</div>
					
					<div class="info">
						<img src="images/bed.png" alt="Bed" class="bed"><p class="bed">2</p>
						<img src="images/shower.png" alt="Shower" class="shower"><p class="shower">1</p>
						<img src="images/sqm.png" alt="sqm" class="sqm"><p class="sqm">35m2</p>
					</div>
					<button onclick="openPopup('popup6')">VIEW</button>
						<div id="popup6" class="popup">
							<div class="content">
								<span class="close" onclick="closePopup()">&times;</span>
								<img src="images/H6.jpg" alt="House 6">
								<p>
								Olivarez Homes Southwoods Binan Laguna!
								<br><br>
								DUPLEX - Jade<br>
								(Complete Type)<br>
								Lot Area : 84-86sqm <br>
								Floor area : 70.85sqm<br>
								<br><br>
								Amenities<br>
								 • Basketball court<br>
								 • Club house<br>
								 • Commercial center<br>
								 • Play area / playground<br>
								 • Swimming pool<br>
								<br><br>
								Features<br>
								 • 24-hour security services<br>
								 • Car parking / garage<br>
								 • Entrance gate<br>
								</p>
							</div>
						</div>
				</div>
				<div class="property-card">
					<label class="new">New!</label>
					<img src="images/H7.jpg" alt="House 7">
					<div class="description">
						<p>₱1,800,000</p>
						<p>Single Attached</p>
						<p>San Antonio, Biñan, Laguna</p>
					</div>
					
					<div class="info">
						<img src="images/bed.png" alt="Bed" class="bed"><p class="bed">4</p>
						<img src="images/shower.png" alt="Shower" class="shower"><p class="shower">3</p>
						<img src="images/sqm.png" alt="sqm" class="sqm"><p class="sqm">100m2</p>
					</div>
					<button onclick="openPopup('popup7')">VIEW</button>
						<div id="popup7" class="popup">
							<div class="content">
								<span class="close" onclick="closePopup()">&times;</span>
								<img src="images/H7.jpg" alt="House 7">
								<p>
								AVAILABLE UNITS 🎉<br>
								YAMA TOWNHOUSE 🏡🏡<br>
								Lot area: 90 sqm ( end)<br>
												60sqm ( inner)
								<br><br>
								📌A community co- designed by the  japanese for the Filipinos.<br>
								📌It is a joint venture partnership between the Philippines P.A properties  and Japan's Hankyu Hanshin Realty Co.<br>
								📌It is a modern asian- inspired  residential development built on traditional  japanese quality and Filipino ingenuity.<br>
								📌Located at " The richest municipality in the Philippines" where big industries has  established their business.
								<br><br>
								AMENITIES:<br>
								Serenity zone<br>
								✅ Reading garden, Togetherness zone, Clubhouse, Swimming pool, Kiddie pool, Picnic area, Wellness zone, Basketball court, Children playground, Jogging path, Parking area
								<br><br>
								Reward your hardwork.<br>
								Talk to us today for more details.<br>
								Jimwell Rosario<br>
								☎️09389249187
								</p>
							</div>
						</div>
				</div>
				<div class="property-card">
					<label class="new">New!</label>
					<img src="images/H8.jpg" alt="House 8">
					<div class="description">
						<p>₱1,800,000</p>
						<p>Townhouse</p>
						<p>Sto. Niño, Biñan, Laguna</p>
					</div>
					
					<div class="info">
						<img src="images/bed.png" alt="Bed" class="bed"><p class="bed">2</p>
						<img src="images/shower.png" alt="Shower" class="shower"><p class="shower">1</p>
						<img src="images/sqm.png" alt="sqm" class="sqm"><p class="sqm">40m2</p>
					</div>
					<button onclick="openPopup('popup8')">VIEW</button>
						<div id="popup8" class="popup">
							<div class="content">
								<span class="close" onclick="closePopup()">&times;</span>
								<img src="images/H8.jpg" alt="House 8">
								<p>
								Newest Project in San Pedro Laguna! Very Accessible to Metro Manila.
								<br><br>
								🏡Alice Townhouse Model<br>
								House features:<br>
								   •2 Bedrooms <br>
								   •54 sqm Floor Area<br>
								   •50 sqm Lot Area<br>
								   •1 Toilet & Bath<br>
								   •Carport<br>
								   •Complete Type turnover
								<br><br>
								👉Very Accessible 💯<br>
								👉near SM San Pedro<br>
								👉10minutes away to Southwoods exit<br>
								👉15minutes away to San Pedro Exit<br>
								👉25 minutes away to Alabang <br>
								👉Guaranteed Malapit sa lahat
								<br><br>
								FRESH AIR!<br>
								FLOOD FREE 💯 
								<br><br>
								For more details and free tripping please send us a message<br>
								☎️09389249187
								</p>
							</div>
						</div>
				</div>
				<div class="property-card">
					<img src="images/H9.jpg" alt="House 9">
					<div class="description">
						<p>₱1,800,000</p>
						<p>Townhouse</p>
						<p>Sto. Niño, Biñan, Laguna</p>
					</div>
					
					<div class="info">
						<img src="images/bed.png" alt="Bed" class="bed"><p class="bed">2</p>
						<img src="images/shower.png" alt="Shower" class="shower"><p class="shower">1</p>
						<img src="images/sqm.png" alt="sqm" class="sqm"><p class="sqm">60m2</p>
					</div>
					<button onclick="openPopup('popup9')">VIEW</button>
						<div id="popup9" class="popup">
							<div class="content">
								<span class="close" onclick="closePopup()">&times;</span>
								<img src="images/H9.jpg" alt="House 9">
								<p>
								READY FOR OCCUPANCY<br>
								UNIT FOR SALE!
								<br><br>
								🏡Jhasmin Model<br>
								La: 121sqm<br>
								Fa: 60sqm
								<br><br>
								AMENITIES 🏠🏠🏠<br>
								• Club house<br>
								• Basketball court<br>
								• Badminton court<br>
								• Swimming pool<br>
								• jogging path<br>
								• parks and playground <br>
								• well planned community<br>
								• 24hrs security system
								<br><br>
								For immediate assistance please send us a message:<br>
								☎️09389249187<br>
								📠 jimwellrosario@gmail.com
								</p>
							</div>
						</div>
				</div>
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
			<a href="#">Career</a>
			<a href="#">Feedback</a>
			<a href="#">Sitemap</a> 
			<a href="#">Privacy</a> 
			<a href="#">Terms</a> 
			<a href="#">Agent Support</a> 
		</div>
    </div>
	
	<script src="properties-script.js"></script>
	
</body>
</html>
