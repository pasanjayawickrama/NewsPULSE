<?php

		$server = "localhost";
		$username = "root";
		$password = "";
		$db = "newstest1";
		$errors = array(); 
		
		$connect = mysqli_connect($server,$username,$password,$db);

		$result = mysqli_query($connect, "SELECT * FROM details ORDER BY id  DESC");

		if(!$connect)
		{
  		die("Database connection error".mysqli_connect_error());
		}


		if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($connect, $_POST['username']);
		$password = mysqli_real_escape_string($connect, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
	
		if (count($errors) == 0) {
			
			$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
			$results = mysqli_query($connect, $query);

			if (mysqli_num_rows($results) == 1) {
				
				header('location:insert.php');
				exit();
			
			}else {
				echo("Wrong username/password combination");
			}
		}
		}


	?>