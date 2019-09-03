<?php
include('sign in_details.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>sign in </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="heading">
	  	<h2>SIGN IN</h2>
	 </div>

	  

<div class="container">
	<form method="post" acion="sign in_details.php">
		<div class="type">
			<input type="text" name="username" placeholder="Username">
		</div>

		
		<div class="type">
			<input type="password" name="password" placeholder="Password">
		</div>

		<div class="sub">
			<input type="submit" name="login" value="submit">
		</div>

		<div class="msg">
			<h4><?php echo $_SESSION['msg'];?></h4>
		</div>


		<a href="index.php">BACK</a>
	</form>
