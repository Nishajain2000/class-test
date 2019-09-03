<?php
include('connection.php');
session_start();
 $msg="";

$db=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['login'])){
	$name=$_POST['username'];
	$passwordm=$_POST['password'];

	$select="SELECT username,password,id FROM register WHERE username ='$name'";
	$query = mysqli_query($db,$select);

	$row = mysqli_fetch_array($query);
		$password = $row['password'];
		$username=$row['username'];
		$id=$row['id'];
		
	if(isset($_POST['login'])&& $row['password']==$passwordm){
      header('location:home.php');
	
	}else{
	   $_SESSION['msg']="Wrong admin";  
}

	
}

















?>