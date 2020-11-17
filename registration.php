<?php
 	session_start();
 	header('location:login.php');
 	
 	$con = mysqli_connect('localhost','jagjit','dd@123');
 	if($con){
 		echo"connection success";
 	}
 	else{
 		echo"connection NOT sucess";
 	}
 	
 	mysqli_select_db($con, 'demo');
 	
 	$name=$_POST['email'];
 	$password=$_POST['password'];
 	
 	$q="select * from signin where name = '$name' && password = '$password' ";
 	
 	$result = mysqli_query($con,$q);
 	
 	$num = mysqli_num_rows($result);
 	
 	if($num==1){
 		echo"Duplicate data";
 	}
 	else{
 		$qy="insert into signin(name,password) values ('$name','$password')";
 		mysqli_query($con,$qy);
 	}
 	
 ?>
