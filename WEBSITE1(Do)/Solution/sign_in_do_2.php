<?php
session_start();





?>

<!DOCTYPE HTML>
<head>
	<link href="signin_do.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	<header>
		<h1 class="website_name">:Do.</h1>
	</header>
	
	
		
		<form  action="Wilkommen_2.php" method="post"class="formplace" name="yes" onsubmit="return check()">
		<h2>First Name</h2>
				<input type="text" name="fname" class="ip" placeholder="Enter your first name here" ">
			<h2>Surname</h2>
					

				<input type="text" name="lname" class="ip" placeholder="Enter your surname here">
			
			<h2>Date Of Birth</h2>
				<input type="date" name="mail_acc" class="ip" placeholder="mm/dd/yyyy">
			<h2>Gender?</h2><p>
				<input type="radio" name="gender" value="man" class="rad">Male<input type="radio" value="notman" name="gender" >Female<input type="radio" value="rand"name="gender" >Other<br>
			</p><h2>Email Address</h2>
				<input type="email" name="mail_acc" class="ip" placeholder="Any valid address will work!">
			
			<h2>User Name</h2>
				<input type="text" name="uname" class="ip" placeholder="Enter a username here- no punctuation marks!">
			<h2>Password</h2>
				<input type="password" name="pwrd" class="ip" placeholder="Enter password here" required>
			<h2>Re-Enter Password</h2>
				<input type="password" name="pwrd1" class="ip" placeholder="Re-enter password here for verification" required>
			<BR>
	
			<input type="submit" value="Submit" class="sub" ">

		</form>

					
	
		</body>
		
	
	
	
	
<script>

function check(){
if(document.forms['yes']['fname'].value=="")
{alert("Please enter the first name!!");
return false;}



if(document.forms['yes']['lname'].value=="")
{alert("Please enter the last name!!");
return false;}



if(document.forms['yes']['uname'].value=="")
{alert("Please enter the username!!");
return false;}

if(document.forms['yes']['pwrd'].value=="")
{alert("Please enter the PASSWORD!!");
return false;}

if(document.forms['yes']['pwrd'].value!=document.forms['yes']['pwrd1'].value)
{
alert("Your password and repeat of the password do not match!");
return false;
}


}





</script>


</html>