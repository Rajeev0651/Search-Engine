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
   <title>Signup</title>
   <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<link rel="icon" href="veda_logo.ico" type="image/x-icon">
<body>
   <header id="wayto">
      <button><a href="index.php">Back</a></button> 
   </header>
   <div class="loginbox">
   <img src="myphoto.jpeg" class="avatar">
   <h1>Sign Up Here</h1>
   <form action="signup.php" method="POST">
       <?php include('errors.php'); ?>
               <div>
                  <label>UserName</label>
                  <input type="text" name="userid" placeholder="Enter the Username" required="" value = "<?php echo $userid; ?>">
               </div>
                <br>
                <div>
                  <label>Password</label>
                  <input type="Password" name="password_1" placeholder="Enter your password" required=""> 
                </div>
                <br>
                <div>
                  <label>Confirm Password</label>
                  <input type="Password" name="password_2" placeholder="Confirm the Password" required="">
                </div>
                <div>
  	             <label>Email</label>
                        <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Enter Your Email" required="">
  	             </div>
                <br>
                    <div>
  	                 <label>NAME</label>
  	                 <input type="text" name="name" required="" placeholder = "Enter Your Name">
  	                 </div>
                <br>
               <div>
                  <label>Date of Birth</label>
                  <input type="date" name="dob" required="">
               </div>
               <div class="wayto1">
                  <button><a href="login.php">Have an account already?
                  	</a></button>   
               </div>
                <br>
                <button type="submit" name="reg_user">Sign Up</button>
      </form>
   </div>
   </body>
</html>