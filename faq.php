<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>DESARE REALTY : FAQ's</title>
	<link rel="stylesheet" href="faq.css">
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
	
	<div class="background">
		<img src="images/1stimage.jpg" alt="1stimage">
	</div>
	
	<div class="greeting">
		<h1> Got a question?<br>Get an answer</h1>
		<p> We've put together some commonly asked questions to give <br>you more information about our Realty</p>
		
	</div>
	
	<div class="container1">
		<div class="title1">
		<h2> How can we help you?</h2>
		</div>
	</div>
	
	<h3 id="faqtxt">Frequently Asked Questions</h3>
	
	<div class="container2">
    <div class="faq-question" id="question1" onclick="toggleAnswer('answer1')">
        <p>What services does Desare Realty provide?</p>
        
    </div>
    <div class="dropdown-content" id="answer1">
        <p>Desare Realty offers a comprehensive range of real estate services, <br>
		including property buying and selling, personalized marketing strategies, <br>
		expert negotiations, and dedicated support throughout the entire process.</p>
    </div>
	</div>
	

	<div class="container2">
    <div class="faq-question" id="question2" onclick="toggleAnswer('answer2')">
        <p>How can I contact Desare Realty?</p>
        
    </div>
    <div class="dropdown-content" id="answer2">
        <p>You can easily get in touch with Desare Realty by visiting our website <br>
		and using the provided contact form, calling our office at [provide phone number], <br>
		or visiting our physical location at [provide office address].
		</p>
    </div>
	</div>
	
	<div class="container2">
    <div class="faq-question" id="question3" onclick="toggleAnswer('answer3')">
        <p>Is Desare Realty only focused on local markets, or do you operate globally?</p>
        
    </div>
    <div class="dropdown-content" id="answer3">
        <p>While our primary focus is on local markets, we have the expertise to <br>
		assist clients in broader regional areas. Contact us to discuss your <br>
		specific location and real estate needs.</p>
    </div>
	</div>
	
	<div class="container2">
    <div class="faq-question" id="question4" onclick="toggleAnswer('answer4')">
        <p>How can Desare Realty assist first-time homebuyers?</p>
        
    </div>
    <div class="dropdown-content" id="answer4">
        <p>Desare Realty specializes in guiding first-time homebuyers through the <br>
		entire process. We provide educational resources, personalized consultations, <br>
		and support to ensure a smooth and informed home buying experience.</p>
    </div>
	</div>
	
	<div class="container2">
    <div class="faq-question" id="question5" onclick="toggleAnswer('answer5')">
        <p>What sets Desare Realty apart from other real estate agencies? </p>
        
    </div>
    <div class="dropdown-content" id="answer5">
        <p>Desare Realty stands out through its commitment to personalized service, <br>
		expert negotiation skills, a vast network, and a dedication to achieving our <br>
		clients' unique real estate goals.
</p>
    </div>
	</div>
	
	<div class="container2">
    <div class="faq-question" id="question6" onclick="toggleAnswer('answer6')">
        <p>Does Desare Realty handle commercial real estate transactions? </p>
        
    </div>
    <div class="dropdown-content" id="answer6">
        <p>Yes, Desare Realty is equipped to handle commercial real estate transactions. <br>
		Our team has the expertise to assist clients in buying, selling, or leasing <br>
		commercial properties.</p>
    </div>
	</div>
	
	<div class="container2">
    <div class="faq-question" id="question7" onclick="toggleAnswer('answer7')">
        <p>How can I stay updated on the latest real estate trends and listings with Desare Realty? </p>
        
    </div>
    <div class="dropdown-content" id="answer7">
        <p>Stay informed about the latest real estate trends and listings by <br>
		following our blog on the website, signing up for our newsletter, or <br>
		connecting with us on social media for regular updates.
</p>
    </div>
	</div>
	
	<div class="container2">
    <div class="faq-question" id="question8" onclick="toggleAnswer('answer8')">
        <p>Does Desare Realty offer real estate investment advice? </p>
        
    </div>
    <div class="dropdown-content" id="answer8">
        <p>Absolutely. Desare Realty provides tailored real estate investment advice <br>
		to help clients identify opportunities, develop investment strategies, and <br>
		make informed decisions for long-term success.
</p>
    </div>
	</div>
	
	<div class="container2">
    <div class="faq-question" id="question9" onclick="toggleAnswer('answer9')">
        <p>Are there any fees associated with Desare Realty's services?</p>
        
    </div>
    <div class="dropdown-content" id="answer9">
        <p>Fees may vary depending on the specific services required. Contact us for  <br>
		a detailed breakdown of any associated costs, ensuring transparency in our <br>
		partnership.</p>
    </div>
	</div>
	
	<div class="container2">
    <div class="faq-question" id="question10" onclick="toggleAnswer('answer10')">
        <p>How can I start my real estate journey with Desare Realty?  </p>
       
    </div>
    <div class="dropdown-content" id="answer10">
        <p>To begin your real estate journey with Desare Realty, simply reach out to <br> 
		us through our website, phone, or in person. We'll guide you through the <br>
		initial steps and tailor our services to meet your specific needs.</p>
    </div>
	</div>
	
	<script>
    function toggleAnswer(id) {
        // Close any open answers
        var allAnswers = document.querySelectorAll('.dropdown-content');
        allAnswers.forEach(function(answer) {
            if(answer.id !== id) {
                answer.style.display = 'none';
            }
        });

        // Toggle the clicked answer
        var answer = document.getElementById(id);
        if (answer.style.display === "none" || !answer.style.display) {
            answer.style.display = "block";
        } else {
            answer.style.display = "none";
        }
    }
</script>
	
</body>
</html>
