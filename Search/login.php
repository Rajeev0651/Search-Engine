<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<title>Veda</title>
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible"
           content="IE=edge">
    <meta name="viewport" content="width=device-width,
            initial-scale=1">
   <title>Log In</title>
   <link rel="stylesheet" type="text/css" href="login.css">
</head>
<link rel="icon" href="veda_logo.ico" type="image/x-icon">
<body>
  <header id="enter">
    <button><a href="index.php">Back</a></button>
  </header>
  <div class="loginbox1">
    <img src="myphoto.jpeg" class="avatar">
    <h1 style="text-align: center">Log in</h1>
    <form action="login.php" method="post">
        <?php include('errors.php'); ?>
    <div>
      <label>UserName</label>
        <input type="text" name="userid" placeholder="Enter your User ID" required="">
    </div>
    <br>
    <div>
      <label>Password</label>
        <input type="password" name="password" placeholder="Enter Password" required="">
    </div>
    <input type="submit" name="login_user" value="Log In">
    <div class="enter1"> 
      <button><a href="signup.php">Don't have an account?</a></button>
    </div>
    </form>
  </div>
</body>
</html>