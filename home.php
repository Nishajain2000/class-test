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
	<div class="container">
			<div class="heading">
				<h1>Online Payment</h1>
			</div>
	 	
		</div>

		<div class="navbar">
			
			<a href="manage.php">Manage publication</a>
			<a href="post.php">Publish</a>
			<a href="logout.php">Log out</a>
		</div>

		<div class="details">
			<h4>
	
</body>
</html>

<?php

if(isset($_POST['submit'])){
	$title=$_POST['title'];
	$comment=$_POST['comment'];
	$link=$_POST['link'];
	$date=$_POST['date'];
	$image=$_FILES['image']['tmp-name'];


$query = "SELECT title,comment,link,date FROM post";
	 $data = mysqli_query($conn,$query);
	 $row=mysqli_fetch_array($data);
	 $title=$row['title'];
	 $comment=$row['comment'];
	 echo $title;
	 echo $comment;
	}
?>