 <!--Php session for user name and displaying his name in the browser -->
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
 <!--html tags starts -->
 
<html xmlns="http://www.w3.org/1999/xhtml">

<head>		<!-- opening of head tag -->
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Home | Employee </title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!-- linking the page into the style sheet -->
<link rel="stylesheet" type="text/css" href="style.css" />
</head>		<!-- Close of Head tag -->

<body>    <!-- Body tag starts -->

<div id="wrapper">
	<div id="header">
		<div id="logo">		<!-- inserting the logo here -->
	
			<h1><a href="home.php"><img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1>
		
		</div> <!-- logo inserted-->
		<div id="slogan">
		<?php
			
			//echo "<h3>Hello " .$user;
			 			?>
		<h3> <a href="logout.php">Logout</a></h3>
		</div>
	</div>
	<div id="menu">
		<ul>
			<li class="first current_page_item"><a href="index.php">Home</a></li>
			<li><a href="plots.php">Plots</a></li>
			<li><a href="apartments.php">Apartments</a></li>
			<li><a href="appointments.php">Appointments</a></li>
			<li><a href="sales.php">Sales</a></li>
			<li><a href="reports.php">Reports</a></li>
		</ul>
		<br class="clearfix" />
	</div>
	<div id="splash">
		<img class="pic" src="images/slide1.jpg" width="870" height="230" alt="" />
	</div>
	<div id="page">
		<div id="content">
			<div class="box">
	 
		 <h2>Welcome to  Reality Solutions</h2> 
			
	 		
				<p> This is <strong>Big Business</strong>, a free and fully standards-compliant CSS website </p>
			</div>
			<div class="box" id="content-box1">
				<h3>New Appartments</h3>
				<ul class="section-list">
					<li class="first">
						<img class="pic alignleft" src="images/apt1.jpg" width="70" height="70" alt="" />
						<span> Apartment 1</span>
					</li>
					<li>
						<img class="pic alignleft" src="images/apt2.jpg" width="70" height="70" alt="" />
						<span>Apartment 2</span>
					</li>
					<li class="last">
						<img class="pic alignleft" src="images/pic02.jpg" width="70" height="70" alt="" />
						<span>Apartment 3.</span>
					</li>
				</ul>
			</div>
			<div class="box" id="content-box2">
				<h3>Our new Ventures</h3>
				<p>
					Comming soon 
				</p>
				<ul class="list">
					<li class="first"><a href="#">New one coming soon 1</a></li>
					<li><a href="#">New one coming soon 2</a></li>
					<li><a href="#">New one coming soon 3</a></li>
					<li><a href="#">New one coming soon 4</a></li>
					<li class="last"><a href="#">New one coming soon 5</a></li>
				</ul>
			</div>
			<br class="clearfix" />
		</div>
		<div id="sidebar">
			<div class="box">
				<h3>Plots for Sale</h3>
				<ul class="list">
					<li class="first"><a href="#">Plot sale1</a></li>
					<li><a href="#">plot sale 2</a></li>
					<li><a href="#">plot sale 3</a></li>
					<li><a href="#">plot sale 4</a></li>
					<li class="last"><a href="#">plot sale 5</a></li>
				</ul>
			</div>
			<div class="box">
				<h3>Commercial Buildings </h3>
				<div class="date-list">
					<ul class="list date-list">
						<li class="first"><span class="date">2/08</span> <a href="#">Commercial Building 1</a></li>
						<li><span class="date">2/05</span> <a href="#">Commercial Building 2</a></li>
						<li><span class="date">2/01</span> <a href="#">Commercial Building 3</a></li>
						<li class="last"><span class="date">1/31</span> <a href="#">Commercial Building 4</a></li>
					</ul>
				</div>
			</div>
		</div>
		<br class="clearfix" />
	</div>
	<div id="page-bottom">
		<div id="page-bottom-content">
			<h3>Offering the complete 
picture of your new home </h3>
			<p>
				New openings every other week !! and Open house ever week 
			</p>
		</div>
		<div id="page-bottom-sidebar">
			<h3>HOME BUYERS & SELLERS</h3>
			<ul class="list">
				<li class="first"><a href="#">1</a></li>
				<li><a href="#">2 </a></li>
				<li class="last"><a href="#">2 </a></li>
			</ul>
		</div>
		<div id="footer">
     &copy; Reality Solutions. All rights reserved. 
     
		<br class="clearfix" />
	</div>
</div>

</body>
</html>