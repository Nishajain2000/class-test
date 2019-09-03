<?php
include ('connection.php');
session_start();


$conn=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['submit'])&&($_POST['password']===$_POST['confirm_password'])){
	$name=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirm_password=password_hash($_POST['confirm_password'], PASSWORD_DEFAULT);
	 


	$db="INSERT INTO register(username,email,password) VALUES('$name','$email','$confirm_password')";
	$query=mysqli_query($conn,$db);

}
if(isset($_POST['submit'])&&($_POST['password']!=$_POST['confirm_password'])){
        header('location:register.php');
    }
    
   
?>