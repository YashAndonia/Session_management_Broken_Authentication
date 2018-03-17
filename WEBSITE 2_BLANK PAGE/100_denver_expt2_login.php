<!Doctype html>
<html lang= "en-us">
<head>
<link rel="stylesheet" type="text/css" href="100_denver_expt2_login.css">
  <meta charset ="utf-8">

</head>
<body>
  <?php
  require 'common.php';
  if (isset($_SESSION['email'])){
    header('location:100_expt1_home.php');}
    ?>

<div class="header"> <a href="100_tut4_start.php"><h2> BlankPage</h2></a></div>
<div id ="pagewrapper">
<form name="login" method="get" action="login.php" autocomplete="on" align ="center">
<b><legend>Hello Welcome Back!</legend></b>
<p>
<label> Name</label>
<input type="text" name="name" required  placeholder="enter your full name" autofocus >

</p>
<p>
   <label>E-mail:</label>
  <input type="email" name="email" required placeholder="enter your email"><br>
  </p><p>
  <label>Password</label>
  <input type="password" name ="password" required autocomplete="off" placeholder="enter your password">
</p><p margin-left=" 20px">
  <input type = "submit" value ="Continue"></p>
<p>Don't have an account?
  <a href ="100_denver_expt2_signup.php">Sign in</a>
</p>
</form>

</div>
<div class="footer">
Created by Denver Pinto Leo Sharon-1614100
</div>
</body>
</html>
