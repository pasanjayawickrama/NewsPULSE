
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/default/default.css" type="text/css" media="screen" />
		
        <title>News PULSE</title>

        <style type="text/css">
        	
			table
			{
				padding: 15px;
				
			}

			td
			{
				padding: 20px;
			}
			
			button
			{	
				padding: 14px 20px;
				width: 100px;
				border-radius: 6px;
				color:white;
				background-color:#190707;
			} 

			button:hover 
			{
			    opacity: 0.7;
			}  

        </style>

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
						<li><a href="adminnews.php" id="homenav">#View news</a></li>
						<li><a href="insert.php" id="blognav"># Admin</a></li>

						
					</ul>
				</nav>
			</header>
			
			<br><hr><br>
			<center><h1>Insert , Update & Delete the news</h1></center><br><br>
			<form action="insertphp.php" method="post" enctype="multipart/form-data" name="form1">
		<table>
			<th><font size="5"><strong>Insert News</strong></font></th><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Title :</td>
				<td><input type="text" name="title" required></td>
			</tr>
			<tr>
				<td>Image:</td>
				<td><input type="file" name="image" required></td>
			</tr>
			<tr>
				<td>Short Description:</td>
				<td><textarea cols="50" rows="9" class="text" name="text" required></textarea>
			</tr>
			<tr>
				<td>More Details:</td>
				<td><textarea cols="50" rows="9" class="text" name="textlong" required></textarea>
			</tr>
			<tr>
				<td>Reporter:</td>
				<td><input type="text" name="reporter" required></td>
			</tr>
			<tr>
				<td><button type="submit">Submit</button></td>
				<td><button type="reset">Cancel</button></td>
			</tr>
		</table>
	</form>

	<br><br><hr><br>


	<form action="update.php" method="post" enctype="multipart/form-data" name="form3">
		<table>
			<th><font size="5"><strong>Update News</strong></font></th><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Title :</td>
				<td><input type="text" name="title" required></td>
			</tr>
			<tr>
				<td>Image:</td>
				<td><input type="file" name="image" ></td>
			</tr>
			<tr>
				<td>Short Description:</td>
				<td><textarea cols="50" rows="9" class="text" name="text" ></textarea>
			</tr>
			<tr>
				<td>More Details:</td>
				<td><textarea cols="50" rows="9" class="text" name="textlong" ></textarea>
			</tr>
			<tr>
				<td>Reporter:</td>
				<td><input type="text" name="reporter" ></td>
			</tr>
			<tr>
				<td><button type="submit">Update</button></td>
				<td><button type="reset">Cancel</button></td>
			</tr>
		</table>
	</form>
	<br><hr>
		<form action="delete.php" method="post" enctype="multipart/form-data" name="form2">
		<table>
			<th><font size="5"><strong>Delete the news</strong></font></th>
			<tr>
				<td>Title:</td>
				<td><input type="text" name="title_x" required></td>
			</tr>
			<tr>
				<td><button type="submit" >Delete</button></td>
				<td><button type="reset">Cancel</button></td>
			</tr>
		</table>
	</form>


			<!--__--__--__--__--  T H E    F O O T E R --__--__--__--___--__--__--__-->
			<footer>
				<p>J . Pasan Jayawickrama    10024933    18.1 Batch    <a href="https://www.facebook.com/pasan.jayawickrama.96"><strong>Pasan Jayawickrama</strong></a>.    All Rights Reserved.</p>
			</footer>
		</div>			
	</body>
</html>
		
		
			
    
    