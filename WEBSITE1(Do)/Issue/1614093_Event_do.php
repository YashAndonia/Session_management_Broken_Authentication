<?php
session_start();

if(!isset($_SESSION["nam"]))	
{session_regenerate_id();
$_SESSION["nam"]="DNE";

}
?>

<!DOCTYPE HTML>
<head>
<link rel="stylesheet" href="dostyle_mainpg.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	
	
	
	<style>
	#data{
	position:absolute;
	left:5%;
	width:70%;
	}
	
	p{
	font-size:2em;
	font-family:'Montserrat';
	}
	
	</style>
</head>

<body>
	<header>
		<h1 style="width=100px;"><a href="Do_1614093.html">:Do.</a></h1>
		
		<input name="search" type="text" class="searchbar" placeholder="Search.">
		</input>
		 
		<div id="UserInfo">
			
			<div id="dp"><img class="avatar" src="https://www.timeshighereducation.com/sites/default/files/styles/the_breaking_news_image_style/public/jojohnson2_0.jpg?itok=L6J5MbTL" height=75 width=auto/></div>
			
				<h2 ><?php echo $_SESSION["nam"];?></h2>
		
		
			<div id="panel">
				<h2>|Settings</h2>
				<h2>|Requests</h2>
				<h2>|Your Events</h2>
				<h2>|About Us</h2>
				<a href="\logouter.php"><h2>|Log Out</h2></a>
		
			</div>
		
		</div>
		
	</header>
	
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
	
	<div id="fir" class="stream" style="width:67%; left:0px;margin-left:0px;">
	<h1 style="background:inherit;">Cricket</h1><h1 style="background:inherit;"> Tournament</h1>
	
	
	
	</div>
	
	
	<div id="data">
	<h2 style="font-size:3em;">Details</h2>
	<p>We have a cricket tournament!</p>
	<h2 style="font-size:3em;">Location</h2>
	<p>Somaiya Cricket ground</p>
	
	<h2 style="font-size:3em;">Contact</h2>
	<p>Phone Number:1238123</p>
	
	</div>
	<footer style="position:fixed; bottom:0px;">
	Session_ID:<?php echo session_id();?>
	</footer>
	
	
</body>
</html>