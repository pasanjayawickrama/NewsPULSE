<?php 

		$title = $_POST["title_x"];

		$server = "localhost";
		$username = "root";
		$password = "";
		$db = "newstest1";

		$con = mysqli_connect($server,$username,$password,$db);

		if(!$con)
		{
			die("Connection Error".mysqli_connect_error());
		}

		echo("Connected successfully <br>");

		$sql = "DELETE from Details where title='$title'";

		if(mysqli_query($con,$sql))
		{
			echo "Record Deleted Successfully..";
		}

		else
		{
			echo "Error" . $sql . "<br>" . mysqli_error($con);
		}

		mysqli_close($con);

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
			<font size="6" ><strong><a href="insert.php">GO TO ADMIN PAGE</a></font>
		</body>
		</html>