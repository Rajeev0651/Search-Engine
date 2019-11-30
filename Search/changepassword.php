<?php include('server.php') ?>
<!doctype HTML>
<html lang="en">
<html>
<head>
	<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible"
           content="IE=edge">
    <meta name="viewport" content="width=device-width,
            initial-scale=1">
    <link href="bootstrap-4.3.1-dist/css/bootstrap-grid.min.css">
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <style>
 body{
	margin: 0;
	padding: 0;
	background-size: cover;
	background-position: center;
	background-color: #fff;
	font-family:sans-serif;
}
.loginbox{
	margin:220px 50px;
	width: 320px;
	height:800px;
	background: #ccc;
	color:#000;
	top: 50%;
	left:50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
	border-radius:40px;
}
.avatar{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -60px;
	left: calc(50%-50px);
}
.h1{
	margin:0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 40px;
}
.loginbox label{
	margin:0;
	padding: 0;
	font-weight: bold;
}
.loginbox input{
	width: 100%;
	margin-bottom: 20px;
}
.loginbox input[type="text"],input[type="password"],input[type="number"],input[type="date"]{
	border: none;
	outline: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	height:40px;
	color:#000;
	font-size:16px;
	font-weight: normal;
}
.loginbox button[type="submit"]{
	border: none;
	outline: none;
	height: 40px;
	width: 250px;
	background: #fb2525;
	color:#fff;
	font-size:18px;
	border-radius: 20px;
	cursor: pointer;
}

.loginbox option{
	margin:0;
	padding: 0;
	background: #ccc;
}

.loginbox button[type="submit"]:hover{
	cursor: pointer;
	background: green;
	color:#000;
}
.loginbox a{
	text-decoration: none;
	font-size: 12px;
	line-height:20px;
	color:darkgrey;
}
.loginbox a:hover{
	color:green;
}
#wayto{
    text-align: left;
    background-color:#fff;
    padding:0px;
    margin: 20px 0px;
    padding: 20px 0px;
}
#wayto button{
	border: none;
	outline: none;
	height: 20px;
	background: #ccc;
	color:#fff;
	font-size:18px;
	font-family: sans-serif;
	border-radius: 20px;
}
#wayto a{
	text-decoration: none;
	font-family:sans-serif;
	color:#000;
}
#wayto a:hover{
	color:green;
}
.wayto1{
    text-align: left;
    background-color:#ccc;
    padding:0px;
}
.wayto1 button{
	border: none;
	outline: none;
	height: 20px;
	background: #ccc;
	color:#ccc;
	font-size:18px;
	font-family: sans-serif;
	border-radius: 20px;
}
.wayto1 a{
	text-decoration: none;
	font-family:sans-serif;
	color:#000;
}
.wayto1 a:hover{
	color:green;
	text-decoration: underline;
}
</style>
</head>
    <body>
        <h1 class="h1">UPDATE PASSWORD</h1>
         <div class="loginbox">
        <form action="changepassword.php" method="POST">
            <?php include('errors.php'); ?>
            <div>
                  <label>USERNAME</label>
                  <input type="text" name="userid" placeholder="Enter Username" required="">
               </div>
                <br>
                <div>
                  <label>New Password </label>
                  <input type="Password" name="password_1" placeholder="New Password" required=""> 
                </div>
                <br>
                <div>
                  <label>Confirm New Password </label>
                  <input type="password" name="password_2" placeholder="Confirm New Password" required="">
               </div>
                 <br>
                <button type="submit" name="password_change">Sign Up</button>
        </form>
        </div>
    </body>
</html>