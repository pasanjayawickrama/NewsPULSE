
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
    </head>

	<body id="home">
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
			
			<!-- T H E    S L I D E R -->	
				<div  class="nivoSlider">
					<section>
						<img height=250 width=1000 src="images/news.jpg" />
					</section>
				</div>
		
			<!--  M A I N   C O N T E N T  __-->
			<section>
				<div id="line">
					<div class="dline"></div>
					<h1>Latest news</h1>
					<div class="dline"></div>
				</div>
				
				
					<?php 
						$count=0;
					?>

					<?php 
						while($res = mysqli_fetch_array($result)) {
							echo "<br>";	
							echo "<br>";	
							echo "<br>";
							$count=$count+1;

							if($count>5)
								{
									break;
								}	

					?>

								
						<p><font size=5 color=#018681><?php echo $res['title'] ?></font></p>
						<div id="ourserv">	

						<?php 
								$img = $res['image'];
		            			echo"<img src='$img' width=300 height=175>"; ?>

		            	<p><font size="3"><?php echo $res['short_description'];
		            			 
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
		
		
			
    
    