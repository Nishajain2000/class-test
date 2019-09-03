<?php
include ('connection.php');

session_start();

$id='';
$conn=mysqli_connect($servername,$username,$password,$dbname);
  
if(isset($_POST['submit'])){
	$title=$_POST['title'];
	$comment=$_POST['comment'];
	$link=$_POST['link'];
	$date=$_POST['date'];
	
	
	$db="INSERT INTO post(title,comment,link,date) VALUES('$title','$comment','$link','$date')";
	if($query=mysqli_query($conn,$db)){
		header('location:index.php?id='.$id);
	}
		
	}



?>