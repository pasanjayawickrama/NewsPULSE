
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

<style type="text/css">

	table
	{
		padding: 15px;
		padding-bottom: 5px;
				
	}

	td
	{
		padding: 20px;
		padding-bottom: 5px;
	}

</style>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/default/default.css" type="text/css" media="screen" />
		
        <title>News PULSE</title>
    </head>

	<body id="blog">
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
						<li><a href="main news.php" id="fullwidthnav">Main news</a></li>
						<li><a href="Feed.php" id="blognav">Feed</a></li>
						<li><a href="admin.php"># Admin</a></li>
					</ul>
				</nav>
			</header>
			<br><br><hr><br>

			<table>
				<tr>
					<td><a href="#">Breaking News</a></td>
					<td><a href="#">Political News</a></td>
					<td><a href="#">Sport News</a></td>
					<td><a href="#">Buisness News</a></td>
					<td><a href="#">International News</a></td>
					<td><a href="#">Whether Report</a></td>
				</tr>
			</table>
			<!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
			<section>
				

					<?php 
						while($res = mysqli_fetch_array($result)) {
							echo "<br>";	
							echo "<br>";	
							echo "<br>";
		
					?>
					
					<p><font size=6 color=#018681><?php echo $res['title'] ?></font></p>
					<div id="ourserv">	
						<?php 
								$img = $res['image'];
		            			echo"<img src='$img' width=400 height=250>"; ?>

		            	<p><font size="3"><?php echo $res['text'];
		            			 
		            	 ?></font></p>

		            	<p><font color=#E8E476>Reporter:<strong><?php echo $res['reporter'] ?></strong></font></p>
					</div>
					<?php
						}
					?>

				
				
			</section>
			<!--__--__--__--__--  T H E    F O O T E R --__--__--__--___--__--__--__-->
			<footer>
				<p>J . Pasan Jayawickrama    10024933    18.1 Batch    <a href="https://www.facebook.com/pasan.jayawickrama.96"><strong>Pasan Jayawickrama</strong></a>.    All Rights Reserved.</p>
			</footer>
		</div>			
	</body>
</html>
		
		
			
    
    