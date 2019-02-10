<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/default/default.css" type="text/css" media="screen" />
		
        <title>News PULSE</title>


        <style type="text/css">
        	
        	.button1
			{	
				padding: 14px 20px;
				width: 100px;
				border-radius: 6px;
				color:white;
				background-color:#079F15;
			}
			.button2
			{	
				padding: 14px 20px;
				width: 100px;
				border-radius: 6px;
				color:white;
				background-color:#f44336;
			}
			input[type=text], input[type=password] {
			  width: 75%;
			  padding: 15px;
			  margin: 5px 0 22px 0;
			  display: inline-block;
			  border: none;
			  background: #f1f1f1;
			  float: right;
			}
			button:hover 
			{
			    opacity: 0.7;
			}

        </style>

        <script type="text/javascript">
        	
        function validate ()
		{
			if (document.form1.username.value.length == "")
			{
			    alert("Username can not be Blank");
			    return false;
			}
			 if (document.form1.password.value.length == "")
		    {
		      alert("Password can not be Blank");
		      return false;
		    }
		    
		}
		function validate2 ()
		{
			if (document.form2.usernameNew.value.length == "")
			{
			    alert("Username can not be Blank");
			    return false;
			}
			if (document.form1.passwordNew.value.length == "")
			{
			    alert("Username can not be Blank");
			    return false;
			}
			if (document.form1.confirmPasswordNew.value.length == "")
			{
			    alert("Username can not be Blank");
			    return false;
			}
			var password1 = document.form1.passwordNew.value;
		    var password2 = document.form1.confirmPasswordNew.value;
		    if ( password1 != password2)
		    {
		      alert("Password Confirmation failed");
		      return false;
		    }
		}

        </script>


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
						<li><a href="main news.php" id="fullwidthnav">Main news</a></li>
						<li><a href="Feed.php" id="blognav">Feed</a></li>
						<li><a href="admin.php"># Admin</a></li>
					</ul>
				</nav>
			</header>
			
			<body>

				<form action="loginphp.php" method="post" name="form1">
				  <div class="container">
				   <br><br><br><br><h1>Admin Login</h1><br>
				   <hr>    
				    <label for="name"><b>Name</b></label>
				    <input type="text" placeholder="Enter your name" name="username" required><br>
				    <br><br><br><br>
				    <label for="psw"><b>Password</b></label>
				    <input type="password" placeholder="Enter Password" name="password" required>
				    <br><br><br>
				    <div class="clearfix">
				      <br><br><br>
				      <button type="reset" class="button2">Cancel</button>
				      <button type="submit" name="login_user" class="button1" onclick="validate();" onsubmit="validate2();">Login</button>
				    </div>
				  </div>
				</form>
				<br><hr>

				<form  action="signup.php" method="post" name="form2">
				  <div class="container">
				    <br><br><br><h1>Admin SignUP</h1><br>
				   <hr>    
				    <label for="name"><b>Name</b></label>
				    <input type="text" placeholder="Enter your name" name="usernameNew" required><br>
				    <br><br><br><br>
				    <label for="psw"><b>Password</b></label>
				    <input type="text" placeholder="Enter Password" name="passwordNew" required="">
				    <br><br><br><br><br>
				    <label for="psw"><b>Confirm Password</b></label>
				    <input type="text" placeholder="Enter Password Again" name="confirmPasswordNew" required="">
				    <div class="clearfix">
				      <br><br><br><br>
				      <button type="reset" class="button2">Cancel</button>
				      <button type="submit" name="login_user" class="button1" onclick="validate2();">Sign UP</button>
				    </div>
				  </div>
				</form>

			<footer>
				<p>J . Pasan Jayawickrama    10024933    18.1 Batch    <a href="https://www.facebook.com/pasan.jayawickrama.96"><strong>Pasan Jayawickrama</strong></a>.    All Rights Reserved.</p>
			</footer>
		</div>

	</body>
</html>
		
		
			
    
    