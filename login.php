<!DOCTYPE html>
<html>
<head>
    <title>DESARE REALTY : Log In</title>
	<link rel="stylesheet" href="login-style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
</head>
<body>

    <div class="login-form-container">
		<div class="login-form">
			<h2>Login Form</h2>
			<form method = "post">
				<div class="form-group">
					<label for="email">Email: </label>
					<input type="text" id="email" name="email" required>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" required>
				</div>
				<div class="form-group">
					<input type="submit" name = "login" value = "Login"></input>
				</div>
			</form>
		</div>
	</div>
</body>

<?php

include 'functions.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];
  

   if (isUserExists($email, $password)) {
      
    $name = getUserFName($email, $password);
      // Store values in session variables
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      $_SESSION['name'] = $name;

      // Redirect to homepage
      header('Location: profile.php');
      exit(); // Make sure to exit after a header redirect 
   } else {
    echo '<script>alert("Invalid Credentials!");</script>';
   }
}

?>

</html>
