 <?php
 //session starts
 session_start();
  if(isset($_SESSION['user'])){
 $user = $_SESSION['user'];
 }
else
 {
 header("Location:index.php");
 }
 ?>
<!DOCTYPE html>

<html>
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Home | Admin</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
	 <!-- adding logo -->
	 
		<div id="logo"> 
	
			<h1><a href="admin_home.php" ><img src="images/Reality_Solutions.png" height="150" width="200" /> </a></h1>
		
		</div>
		<div id="slogan">

		<h3> <a href="logout.php">Logout</a></h3>
		</div>
	</div>
	<div id="menu">
		<ul>
			<li class="first current_page_item"><a href="admin_home.php">Home</a></li>
			<li><a href="view_users.php">View Users</a></li>
			<li><a href="adduser.php">Add User</a></li>
			<li><a href="edituser.php">Edit User</a></li>
			<li><a href="delete_user.php">Delete User</a></li>
				<li><a href="view_user.php">View User</a></li>
		 		<li><a href="view_complaints.php">Notifications</a></li>
			 
		<br class="clearfix" />
	</div>
	<div id="splash">
		<img class="pic" src="images/slide3.jpg" width="870" height="230" alt="" />
	</div>
	<div id="page">
		<div id="content">
			<div class="box">
	<h2>Welcome to  Reality Solutions</h2> 
	
	<p align="justify">
The real estate industry has had some interesting ups and down over the past decade - 
NAR (National Association of Realtors) membership hit its all-time high back in 2006 with 1,357,000 realtors 
before dropping dramatically with the housing financial crisis. However, 
since its rock bottom in 2012 (with 999,000 members), it has been steadily increasing, 
and with nearly 1,100,000 members in 2014, 
the competition among realtors is heating up.
</p>
 
<p align="justify">
The competition is fierce, and 
these days you will need expert online and offline marketing skills to set yourself apart from the pack.
marketing for real estate
</p>


	
			</div>
		</div>
		
		<br class="clearfix" />
		<br/><br/><br/><br/><br/><br/>
	</div>  
    
<!-- footer bigin -->	
	
  <div id="footer">
     &copy; Reality Solutions. All rights reserved. 
     
    <br class="clearfix" />
     </div>  
    <!-- footer end -->
</div>

</body>
</html>