 <!-- php seesion starts -->
 
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
 <!-- php session ends -->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Apartments </title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!-- adding stylesheet or css file to the page -->
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>	<!-- starting of bady tag -->
<div id="wrapper">
	<div id="header">
		<div id="logo"> 		<!-- adding of logo to the page -->
		<h1><a href="home.php">   <img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1> 
     
		</div>
		<div id="slogan">
			<h3> <a href="logout.php">Logout</a></h3>
		</div>
	</div>
	<div id="menu">		<!-- menu items listed here-->
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="plots.php">Plots</a></li>
			<li class="first current_page_item"><a href="apartments.php">Apartments</a></li>
			<li><a href="appointments.php">Appointments</a></li>
			<li><a href="sales.php">Sales</a></li>
			<li><a href="reports.php">Reports</a></li>
		 
		 
		</ul>
		<br class="clearfix" />
	</div>
	 
	<div id="page">
		<div id="content">
			<?php
			
			 
			echo "   Apartments page ";
			
			?>
			 <table  border="1"> <!-- table showing the diffrent types of the apartments availible-->
              <tr>
                <th>Apartments Type</th>
                <th>Address </th>
                <th>Monthly rent</th>
                <th>Lease availability </th>
                <th>for sale</th>
				<th> Edit</th>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
				<td>&nbsp;</td>
              </tr>
              </table>
		</div>
		
		
		<br class="clearfix" />
	</div>
  <div id="footer">
     &copy; Reality Solutions. All rights reserved. 
     
    <br class="clearfix" />
  </div>  
</div>
</div>

</body>
</html>