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
 	
 	mysqli_select_db($conn, 'database');
 	
 	$firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);	
 	
 	$q="select * from users where email = '$email' && password = '$password' ";
 	
 	$result = mysqli_query($con,$q);
 	
 	$num = mysqli_num_rows($result);
 	
 	if($num==1){
 		echo"Duplicate data";
 	}
 	else{
 		$qy="insert into users(firstname,lastname,email,password) values ('$firstname','$lastname','$email','$password')";
 		mysqli_query($conn,$qy);
 	}
 	
 ?>
