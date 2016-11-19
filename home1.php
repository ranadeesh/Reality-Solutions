<!--Php session starts -->

 <?php
 session_start();
  if(isset($_SESSION['user'])){
 $user = $_SESSION['user'];
 }
else
 {
 header("Location:index.php");
 }
 ?>

<!-- html taging  starts -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Home Page</title>		<!-- title of the page -->

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!-- linking style sheet to the page -->
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<!-- starting the body tag -->
<body>

<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="home.php"><img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1>		<!-- to add logo -->
		</div>
		<div id="slogan">
			<h3> <a href="logout.php">Logout</a></h3>
		</div>
	</div>
	<div id="menu"> 	<!-- Menu for the employee after logging in -->
		<ul>
			<li><a href="index.php">Home</a></li>
				<li><a href="plots.php">Plots</a></li>
			<li class="current_page_item"><a href="apartments.php">Apartments</a></li>
			<li><a href="appointments.php">Appointments</a></li>
			<li><a href="sales.php">Sales</a></li>
			<li><a href="reports.php">Reports</a></li>
		 
		<br class="clearfix" />
	</div>
	 
	<div id="page">
		<div id="content"> <!-- loding the page content -->
			<?php
			
			echo "Hello " .$user;
			echo " Welcome to Reality Solutions ";
			
			?>
		</div>
		
		
		<br class="clearfix" />
	</div>
  <div id="footer">  	<!--  Fotter tag or division -->
     &copy; Reality Solutions. All rights reserved. 
     
    <br class="clearfix" />
  </div>  
</div>
</div>

</body>
</html>