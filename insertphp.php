<?php

		$server = "localhost";
		$username = "root";
		$password = "";
		$db = "newstest1";
		
		$title = $_REQUEST["title"];
		$text = $_REQUEST["text"];
		$textlong = $_REQUEST["textlong"];
		$reporter = $_REQUEST["reporter"];
		$target = basename($_FILES['image']['name']);
		$image = $_FILES['image']['name'];


		$connect = mysqli_connect($server,$username,$password,$db);

		if(!$connect)
		{
  		die("Connection error".mysqli_connect_error());
		}

		echo ("Successfully connected<br>");


  		$sql="INSERT INTO details (title,image,short_description,text,date,reporter) VALUES ('".$title."','".$image."','".$text."','".$textlong."',now(),'".$reporter."')";

  	 		

  		if(mysqli_query($connect,$sql))
		{
			move_uploaded_file($_FILES['image']['tmp_name'],$target);
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
			<font size="6" ><strong><a href="insert.php">GO TO INSERT PAGE</a></font>
		</body>
		</html>
