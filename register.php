<?php
include ('register_details.php');
?>



<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="heading">
	  	<h2>REGISTER NOW</h2>
	 </div>

	  

<div class="container">
	<form method="post" acion="register_details.php">
		<div class="type">
			<input type="text" name="username" placeholder="Username">
		</div>

		<div class="type">
			<input type="email" name="email" placeholder="Email address">
		</div>

		<div class="type">
			<input type="password" name="password" placeholder="password" id="password">
		</div>

		<div class="type">
			<input type="password" name="confirm_password" placeholder="Confirm password" id="confirm_password">
		</div>

		<div class="sub">
			<input type="submit" name="submit" value="submit" onclick="validate()">
		</div>

		<a href="index.php">BACK</a>
	</form>

	<script>
        function validate(){

            var a = document.getElementById("password").value;
            var b = document.getElementById("confirm_password").value;
            if (a!=b){
               alert("Passwords do no match");
               return false;
            }
        }
     </script>

</body>
</html>

