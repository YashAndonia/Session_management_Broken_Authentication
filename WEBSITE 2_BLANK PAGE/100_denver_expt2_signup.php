<!Doctype html>
<html lang= "en-us">
<head>
<link rel="stylesheet" type="text/css" href="100_denver_expt2_signup .css">
  <meta charset ="utf-8">

</head>
<body>
  <?php
  require 'common.php';
  if (isset($_SESSION['email'])){
    header('location:100_expt1_home.php');
  }
   ?>

<div class="header">
  <a href="100_tut4_start.php"><h2> BlankPage</h2></a></div>
<div id ="pagewrapper">
<form name="signup" method="get" action="signupreg.php" autocomplete="on">
 <b><legend>Save your account now</legend></b>
 <p>
 <label> Name</label>
 <input type="text" name="name" required  placeholder="enter your full name" autofocus >

 </p><p>
 <label> Gender:</label>
 <select name="gender">
 <option value="Male" selected>Male</option>
 <option value="Female">Female</option>
 <option value="Other">Other</option>
 </select><br>
 </p><p>
<label> Date of birth:</label>
  <input type="date" name="dob"><br>
  </p><p>
   <label>E-mail:</label>
  <input type="email" name="email" required placeholder="enter your email"><br>
  </p><p>
  <label>Password:</label>
  <input type="password" name ="password" required autocomplete="off" placeholder="enter your password">
  </p><p>


  <b> <legend>The world will know you as</legend></b>

 <input type="text" name="alias" required placeholder="Alias..."> <br>
 </p>
 <p>
 <input type = "submit" value ="submit">
 <input type ="reset" value="clear">
  <br>
  </p>
<p>Already have an account?
  <a href ="100_denver_expt2_login.php">Log in</a>
</p>
</form>

</div>
<div class="footer">
Created by Denver Pinto Leo Sharon-1614100
</div>
</body>
</html>
