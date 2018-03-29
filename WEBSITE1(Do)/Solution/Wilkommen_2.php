<?php
/*
session_start();
session_regenerate_id();
 if(isset($_POST["fname"])){//the form members are set and are yet to be filled into the session variables, so stay loggedin
$a=$_POST["fname"];
$b=$_POST["lname"];
$_SESSION["nam"]=$a." ".$b;
 }
 else {
   if(!isset($_SESSION["nam"])){//session name is not set so logout

  header('location:byebye.php');
   }
 }*/
 session_start();
 if(isset($_POST["fname"]))
 {
	 
   $a=$_POST["fname"];
   $b =$_POST["lname"];
   session_regenerate_id();
   $_SESSION["nam"]=$a." ".$b;
   unset($_POST["fname"]);

 }
 else {

   if(!isset($_SESSION["nam"])||$_SESSION["nam"]=="DNE")
   {
     header('location:byebye.php');
   }
 
 
 }
 
 


 ?>

<!DOCTYPE HTML>
<head><meta http-equiv="refresh" content="12">

	<title>Lets Do</title>
	<link href="dostyle_mainpg.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script>
function connection()
{

var status =<?php if(isset($_SESSION['nam'])){echo 1;}else{ echo 0;}?>;
console.log(status);
if(status)
 {

   //setTimeout(connection,10000);
 }
 else
 {
  window.location.replace("http://localhost/byebye.php");
 }
}
document.addEventListener("DOMContentLoaded", function() {
  connection();
});
</script>


</head>

<body>

	<header>
		<h1 style="width=100px;"><a href="Do_1614093.html">:Do.</a></h1>

		<input name="search" type="text" class="searchbar" placeholder="Search.">
		</input>

		<div id="UserInfo">

			<div id="dp"><img class="avatar" src="https://www.timeshighereducation.com/sites/default/files/styles/the_breaking_news_image_style/public/jojohnson2_0.jpg?itok=L6J5MbTL" height=75 width=auto/></div>

				<h2 ><?php echo $_SESSION["nam"];?></h2>


			<div id="panel" style=" top:0px;">
				<h2>|Settings</h2>
				<h2>|Requests</h2>
				<h2>|Your Events</h2>
				<h2>|About Us</h2>
				<a href="\logouter.php"><h2>|Log Out</h2></a>
			</div>

		</div>

	</header>
<br>
<br>
	<div id="Categories">
		<br><br><h2>Categories.</h2>


		<table style="top:60%;">

			<tr>
				<td>Sports</td>

			</tr>
			<tr>
				<td>Food</td>

			</tr>
			<tr>
				<td>Cultutre</td>

			</tr>

			<tr>
				<td>Arts</td>

			</tr>

			<tr>
				<td>Literature</td>

			</tr>
			<tr>
				<td>Festivals</td>

			</tr>

		</table>

	</div>

	<div id="map" style="top:35%;">
	<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15083.26482820217!2d72.89888315869142!3d19.071816795943672!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1519173083915" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

	</div>

	<div class="stream" id="fir">

	<h2 class="title "><a href="1614093_Event_do.php" style="color:white;">College Cricket Tournament</h2></a>


	</div>

	<div class="stream" id="sec">

	<h2 class="title">Silent DJ!</h2>


	</div>

	<div class="stream" id="third">

	<h2 class="title">Food Truck Festival</h2>


	</div>

	<div class="stream" id="fourth">

	<h2 class="title">Beach Party</h2>


	</div>


	<footer style="position:fixed; bottom:0px;">
	Session_ID:<?php echo session_id();?>
	</footer>
</body>
<script>

function logout(){
	return true;

}

</script>
</html>
