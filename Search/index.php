<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Welcome to VEDA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
	<aside><header id="signup">
		<button><a href="signup.php" target="_blank">Sign up</a></button>
		<br><br>
		<button><a href="login.php" target="_blank">Log in</a></button>
	</header></aside>
		<div class="logo">
			<font color="white">VEDA</font>
		</div>
		<?php
			if(isset($_SESSION['message']))
			{
				echo "<div id='error'>" .$_SESSION['message']."</div>";
				unset($_SESSION['message']);
			}
		?>
		<form action="LuceneTester" method = "get">
      	<div class="search-box">
			<input type="text" name="q" class="search-txt" placeholder="Search VEDA or Type a URL">
			<a class="search-btn" href="">
					<i class="fas fa-search"></i>
				</a>
		</div>
		</form>
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
    	<footer class="Team">
     		<ul>
      			<li><a href="https://www.instagram.com/rishabh_kumarr" target="_blank">RISHABH KUMAR</a></li>
	  			<li><a href="https://www.instagram.com/rajeev.singh_rajput" target="_blank">RAJEEV SINGH</a></li>
      			<li><a href="https://www.instagram.com/_an_awesome_guy" target="_blank">HARSHIT SINGH</a></li>
      			<li><a href="https://www.instagram.com/khurramali1997" target="_blank">KHURRAM ALI</a></li>
      			<li><a href="https://www.instagram.com/ranjana_sharma98" target="_blank">RANJANA SHARMA</a></li>
      		</ul> 
		</footer>
</body>
</html>