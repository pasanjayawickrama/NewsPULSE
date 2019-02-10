<?php

		$server = "localhost";
		$username = "root";
		$password = "";
		$db = "newstest1";
		

		$connect = mysqli_connect($server,$username,$password,$db);

		$a=$_GET["id"];

		$result = mysqli_query($connect,"DELETE FROM details where id=$a");

		if(!$connect)
		{
  		die("Database connection error".mysqli_connect_error());
		}

		
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
	<br><br><br><h2>Success</h2>
	<br><br><h2>Click:<u><a href="adminnews.php">Go to view news page</a></u></h2>

</body>
</html>