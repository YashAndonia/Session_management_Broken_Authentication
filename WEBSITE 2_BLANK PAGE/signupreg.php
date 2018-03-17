<?php
require'common.php';

$name= $_GET['name'];

$gender =$_GET['gender'];

$dob =$_GET['dob'];

$email =$_GET['email'];

$password =$_GET['password'];
$_SESSION['name']=$name;
$_SESSION['email']=$email;
  header('location:100_expt1_home.php');
?>
