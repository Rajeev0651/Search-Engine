<?php
session_start();
$link = mysqli_connect("localhost","root","","search_engine");
$userid = $_SESSION['userid'];
$id = $_SESSION['id'];
$sql = "drop table `$userid`";
mysqli_query($link,$sql);
$sql = "DELETE FROM user_list WHERE username = '$userid' ";
mysqli_query($link,$sql);
session_destroy();
unset($_SESSION['userid']);
header('location: index.php');
mysqli_query($link,$sql);
?>