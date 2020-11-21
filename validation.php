<?php
 	session_start();
 	header('location:login.php');
 	
 	$conn = mysqli_connect('localhost','root','','database');
 	if($conn){
 		echo"connection success";
 	}
 	else{
 		echo"connection NOT sucess";
 	}
 	
 	mysqli_select_db($con, 'database');
 	
 	$email=$_POST['email'];
 	$password=$_POST['password'];
 	
 	$q="select * from users where email = 'email' && 'password' = '$password' ";
 	
 	$result = mysqli_query($conn,$q);
 	
 	$num = mysqli_num_rows($result);
 	
 	if($num==1){
 		$_SESSION['email'] = $email;
 		header('location:home.php');
 	}
 	else{
 		header('location:login.php');
 	}
 	
 ?>
