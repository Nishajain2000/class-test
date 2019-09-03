<?php

include('post_details.php');

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="homestyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php
	$query = "SELECT title,comment,link,date FROM post";
	 $data = mysqli_query($conn,$query);
	 $row=mysqli_fetch_array($data);
?>
	<div class="container">
			<div class="heading">
				<h1>Online Payment</h1>
			</div>
	 	
		</div>

		<div class="navbar">
			<a href="#">Home</a>
			<a href="sign in.php">Login</a>
		</div>

		<div class="title">
			<p> <?php echo $row['title'];?></p> 
		</div>

		<div class="comment">
			<p> <?php echo $row['comment'];?></p> 
		</div>

		<div class="link">
			<p> <?php echo $row['link'];?></p> 
		</div>

		<div class="date">
			<p> <?php echo $row['date'];?></p> 
		</div>
</div>
</body>
</html>


