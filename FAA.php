<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Find An Agent</title>
	<link rel="stylesheet" href="FAA.css">
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
    
    <h1>Find a Real Estate Agent in your Area</h1>

    <div class="grid-container" id="agentContainer">
		<div class="agents" id="agents">
			
			<!-- JSON GENERATE -->

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
	<script>
		let agents = [];
	
		const addDataToHTML = () => {
			const agentContainer = document.getElementById('agents');
	
			if (agents.length > 0) {
				agents.forEach(agent => {
					let listItem = document.createElement('a');
					listItem.classList.add('agent1');
					listItem.href = agent.link;
	
					listItem.innerHTML =
						`<div class="agent1">
							<img src="${agent.image}" alt="${agent.name}" class="pic">
							<div class="info">
								<img src="membersImages/fbacc.png" alt="Facebook" class="fbacc">
								<p class="name">${agent.name}</p>
							</div>
						</div>`;
	
					agentContainer.appendChild(listItem);
				});
			} else {
				let emptyMessage = document.createElement('div');
				emptyMessage.classList.add('empty-message');
				emptyMessage.textContent = `No agents available!`;
				agentContainer.appendChild(emptyMessage);
			}
		};
	
		const initApp = async () => {
			try {
				const response = await fetch('agents.json');
				agents = await response.json();
				addDataToHTML();
			} catch (error) {
				console.error('Error fetching data:', error);
			}
		};
	
		initApp();
	</script>
    
</body>
</html>