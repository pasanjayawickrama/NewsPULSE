<?php

		$server = "localhost";
		$username = "root";
		$password = "";
		$db = "newstest1";
		
		$name = $_REQUEST["usernameNew"];
		$passwordNew = $_REQUEST["passwordNew"];
		
		

		$connect = mysqli_connect($server,$username,$password,$db);

		if(!$connect)
		{
  		die("Connection error".mysqli_connect_error());
		}

		echo ("Successfully connected<br>");


  		$sql="INSERT INTO admin (username,password) VALUES ('".$name."','".$passwordNew."')";

  	  				

  		if(mysqli_query($connect,$sql))
		{
			
  			echo "New record entered Successfully";
		}
		else
		{
  			echo "error".$sql."<br>".mysqli_error($connect);
		}

			mysqli_close($connect); 

		?> 
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/default/default.css" type="text/css" media="screen" />
		</head>
		<body id="contact">
			<br><br><br><br>
			<font size="5">You have signed up..</font><br><br>
			<font size="3">Click:</font><font size="4" ><strong><a href="admin.php">GO TO ADMIN PAGE</a></font>
		</body>
		</html>
