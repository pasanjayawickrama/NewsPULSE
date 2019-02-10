<?php

		$server = "localhost";
		$username = "root";
		$password = "";
		$db = "newstest1";
		

		$connect = mysqli_connect($server,$username,$password,$db);

		$result = mysqli_query($connect, "SELECT * FROM details ORDER BY id  DESC");

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
		
        <title>News PULSE</title>

        <style type="text/css">
        	td{
        		padding: 10px;
        	}
        </style>
     
    </head>

	<body id="contact">
		<div id="wrapper">
			<header>
				<div id="logo">
				<h1>News PULSE<span id="iisrt"><span id="ii">II</span><span id="srt">NSBM</span></span></h1>
				<div id="tagline">
					<h2>Truth first...!</h2>
				</div>
				</div>
				<nav>
					<ul>
						<li><a href="index.php" id="homenav">Home</a></li>
						<li><a href="adminnews.php" id="homenav">#View news</a></li>
						<li><a href="insert.php" id="blognav"># Admin</a></li>
					</ul>
				</nav>
			</header>
			
			<body>
				<br><br><br><hr><br>

				
				<table class="table">
  				<thead class="thead-dark">
   

				<table class="table">
				  <thead class="thead-light">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Ttile</th>
				      <th scope="col">Body</th>
				      <th scope="col">Posted_By</th>
				      <th scope="col">View</th>
				    </tr>

				  </thead>
				  <tbody>
				  <?php 
				    while($res = mysqli_fetch_array($result)){

				        
				        echo"<tr>";
				        echo"<td>".$res['id']."</td>";
				        echo"<td>".$res['title']."</td>";
				        echo"<td>".$res['text']."</td>";
				        echo"<td>".$res['reporter']."</td>";
				        echo"<td>";
				        echo "<a href=viewdelete.php?id=$res[id]>Delete</a>";
				        
				    }
				    ?>
				   
				  
				</table>


			<footer>
				<p>J . Pasan Jayawickrama    10024933    18.1 Batch    <a href="https://www.facebook.com/pasan.jayawickrama.96"><strong>Pasan Jayawickrama</strong></a>.    All Rights Reserved.</p>
			</footer>
		</div>

	</body>
</html>
		
		
			
    
    