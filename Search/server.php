<?php
session_start();
$userid = "";
$email    = "";
$errors = array(); 
$db = mysqli_connect('localhost', 'root', '', 'search_engine');
if (isset($_POST['reg_user'])) {
  $userid = mysqli_real_escape_string($db, $_POST['userid']);
  $userid = filter_var($userid,FILTER_SANITIZE_STRING);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $date_of_birth = mysqli_real_escape_string($db, $_POST['dob']);
    
  if (empty($userid)) { array_push($errors, "User_id is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($name)){ array_push($errors, "UserName is required"); }
  if (empty($date_of_birth)) { array_push($errors, "Date Of Birth is Required"); }
 $email = filter_var($email,FILTER_SANITIZE_EMAIL);
 $userid = filter_var($userid,FILTER_SANITIZE_STRING);
 if(!filter_var($email,FILTER_VALIDATE_EMAIL))
 {
     array_push($errors,"Enter a Valid Email");
 }
  $user_check_query = "SELECT * FROM user_list WHERE username='$userid' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['userid'] === $userid) {
      array_push($errors, "User already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
    
  if (count($errors) == 0) {
         $year = (int)substr($date_of_birth,0,4);
         $current_year = (int)date("Y");
         $age = $current_year - $year;
  	$password = md5($password_1);
      /* 
      Trigger is used here
      The Trigger is a before Trigger.
      */
     $query = "create or replace trigger sample before insert on user_list for each row set new.age =  '$age'";
    
    mysqli_query($db, $query);
  	$query = "INSERT INTO user_list (username, password, email, name, dob) 
  			  VALUES('$userid', '$password', '$email', '$name', '$date_of_birth')";
  	mysqli_query($db, $query);
  	$_SESSION['userid'] = $userid;
    $_SESSION['email'] = $email;
  	//header('location: index.php');
  }
    if (count($errors) == 0){
        $query = "create table `".$userid."` ( id INT(4) AUTO_INCREMENT NOT NULL,history varchar(100) NOT NULL, PRIMARY KEY(id))";
        mysqli_query($db,$query);
        $user = mysqli_fetch_assoc($query);
        $_SESSION['id'] = user['id'];
    header('location: user.php'); 
    }
}
//user input
if (isset($_POST['login_user'])) {
  $userid = mysqli_real_escape_string($db, $_POST['userid']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($userid)) {
  	array_push($errors, "userid is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
$user_check_query = "SELECT * FROM user_list WHERE username='$userid' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);  
  if (count($user) == 0) { 
      array_push($errors, "User Dosent exists");
  }
  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user_list WHERE username='$userid' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['userid'] = $userid;
  	  header('location: user.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
if(isset ($_POST['password_change']))
{
     $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
     $x =  mysqli_real_escape_string($db, $_POST['userid']);
     if ($password_1 != $password_2)
	array_push($errors, "The two passwords do not match");
         if($x != $_SESSION['userid'])
             array_push($errors, "Enter a valid UserName");
        if(count($errors) == 0)
        {
            $password = md5($password_1);;
            $sql = "UPDATE user_list set password = '$password' WHERE username= '$x' ";
            mysqli_query($db,$sql);
            header('location: user.php');
        }
}
?>