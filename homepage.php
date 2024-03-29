<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="homepage.css">
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

    <div class="mainbody flex-column">
        <div class="searchsegment">
            <div class="background">
                <!-- <img src="images/pic1.jpg" alt="background">
            
                <div class="buttons">
                    <a href="#" class="black">Buy</a>
                    <a href="#">Rent</a>
                    <a href="#">Sell</a>
                    <a href="#">Agents</a>
                </div> -->
                
                <h1>Welcome <br> to <br> DESARE REALTY</h1>
            </div>
        </div>

        <div class="findagent">
            <div class="centeritem">
                <div class="left-flex">
                  <div class="agent-picture">
                     <img src="images/agentpc.png" alt="Find an Agent">
                 </div>  

                </div>
              <div class="right-flex">
                <div class="agent-text">
                    <div class="textheader">The appropriate agent has the ability <br> to take the lead</div>
                    <br><br><br>
                    <div class="textcontent">
                        In the realm of real estate, having the right agent
                        is essential to having a reliable guide. A proficient agent, 
                        well-versed in market dynamics, acts as a compass, 
                        steering clients through property transactions with ease.
                        Their expertise ensures a smooth journey, whether 
                        buying or selling, making them an essential ally 
                        for a successful and stress-free real estate experience.</div>
                 </div>
    
                 <div class="agent-button">
                    <button class="findagent"><a href="FAA.php">FIND AN AGENT</a></button>
                 </div>
              </div>

            

            </div>
        </div>

       

        <div class="articles">
            <div class="articlecontent">
                <div class="text">Want to sell your property? Create a Seller Account Now.</div>
                
                <button class="readarticles"><a href="seller-registration-form.php">Create Seller Account</a></button>
            </div>

        </div>

        <!-- <div class="newscontainer">
            <div class="news">
                <div class="newsitem1 flex-news odd-news">
                   <div class="newscontent">
                    <div class="newstext">
                        <div class="newsheader">How to have a healthy family in <br>DESARE REALTY?</div>
                        <br><br><br>
                        <div class="newssub">It is possible to create <br>and maintain a healthy family, <br>especially if you have a home.</div>
                    </div>
                    <div class="newsbutton"><button class="readmore"><a href="#">Read More</a></button></div>
                   </div>
                    <div class="newsimage"><img src="https://picsum.photos/360/263" alt="News Image"></div>
                    
                </div>

                <div class="newsitem2 flex-news even-news">
                    <div class="newscontent">
                     <div class="newstext">
                         <div class="newsheader">What your personality at <br>home reveals about you</div>
                         <br><br><br>
                         <div class="newssub">Continue reading to discover <br>more about each of our various <br>house styles.</div>
                     </div>
                     <div class="newsbutton"><button class="readmore"><a href="#">Read More</a></button></div>
                    </div>
                     <div class="newsimage"><img src="https://picsum.photos/360/263" alt="News Image"></div>
                     
                 </div>

                 <div class="newsitem3 flex-news odd-news">
                    <div class="newscontent">
                     <div class="newstext">
                         <div class="newsheader">5 Ways to Prepare Your <br>Home for Christmas</div>
                         <br><br><br>
                         <div class="newssub">Check out these suggestions <br>to make the most of your <br>Christmas decorations.</div>
                     </div>
                     <div class="newsbutton"><button class="readmore"><a href="#">Read More</a></button></div>
                    </div>
                     <div class="newsimage"><img src="https://picsum.photos/360/263" alt="News Image"></div>
                     
                 </div>

                 <div class="newsitem4 flex-news even-news">
                    <div class="newscontent">
                     <div class="newstext">
                         <div class="newsheader">Why you should invest in <br> DESARE REALTY?</div>
                         <br><br><br>
                         <div class="newssub">Located in Laguna is also close to neighboring cities and boasts a variety of attractions such as commercial districts, retail malls, and amusement parks.
                        </div>
                     </div>
                     <div class="newsbutton"><button class="readmore"><a href="#">Read More</a></button></div>
                    </div>
                     <div class="newsimage"><img src="https://picsum.photos/360/263" alt="News Image"></div>
                     
                 </div>
            </div>
           
    
        </div>
    </div> -->

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

</body>
</html>