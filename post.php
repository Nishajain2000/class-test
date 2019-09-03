<?php
include('post_details.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>post</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="heading">
	  	<h2>POST SOMETHING!!!</h2>
	 </div>

	  

<div class="container">
	<form method="post" acion="sign in_details.php" >
		<div class="type">
			<input type="text" name="title" placeholder="Title">
		</div>

		
		<div class="type">
			<textarea name="comment" placeholder="Write Description"></textarea>
		</div>


		<div class="type">
			<input type="text" name="link" placeholder="Provide link">
		</div>

		<div class="type">
			<input type="date" name="date">
		</div>

		


		

		<div class="sub">
			<input type="submit" name="submit" value="submit" >
		</div>
	</form>
