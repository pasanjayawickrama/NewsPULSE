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

		$count= 1;
	?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/default/default.css" type="text/css" media="screen" />
		  
        <title>News PULSE</title>
    </head>
    
	<body id="fullwidth">
		<div id="wrapper">
			<header>
				<div id="logo">
				<h1>News PULSE<span id="ii">II</span><span id="srt">NSBM</span></h1>
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
			<br><br><hr>
			<!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
			

			<?php 
					while($res = mysqli_fetch_array($result)) {
					echo "<br>";	
					echo "<br>";	
					echo "<br>";
					$count=$count+1;
					if($count>2)
						{
							break;
						}	
			?>

			<section>
					<br>
					<p><center><strong><font size=7><?php echo $res['title'] ?></font></center></strong></p><br><br><br>

						<?php 
								$img = $res['image'];
		            			echo"<img src='$img' width=400 height=250>"; ?>

		            	<p><font size=4><?php echo $res['text'];
		            			 
		            	 ?></font></p>

		            	<p><font color=#E8E476>Reporter:<strong><?php echo $res['reporter'] ?></strong></font></p>

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
		
		
			
    
    