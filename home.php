<?php
    $conn = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($conn));
    
    if(!isset($_SESSION)){
        session_start();
    }
?>
<html>
	<head>
		<title>Home</title>
	</head>
	
<body>
	<h1>Hello ! Welcome to Home Page ......</h1>
</body>
</html>
