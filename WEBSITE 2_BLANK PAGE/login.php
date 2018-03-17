<?php
require'common.php';

$name= $_GET['name'];

$email =$_GET['email'];

$password =$_GET['password'];
$_SESSION['name']=$_name;
$_SESSION['email']=$_email;
  header('location:100_expt1_home.php');
?>
