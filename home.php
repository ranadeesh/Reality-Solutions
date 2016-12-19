 <?php
 //session starts
ob_start();
 //session_start();

  if(isset($_SESSION['user'])){
 $user = $_SESSION['user'];
 }
else
 {
 echo '<script> locaction.href ="index.php" </script>';
 }
 ?>
<!DOCTYPE html>

<html >
<!-- header tag starts -->
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Home | Employee </title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<!-- header tag closes -->

<!--body tag opens -->
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">  <!-- adding logo -->
	
			<h1><a href="home.php"><img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1>
		
		</div>
		<div id="slogan">
		<?php
			
			//echo "<h3>Hello " .$user;
			 			?>
		<h3> <a href="logout.php">Logout</a></h3>
		</div>
	</div>
	<div id="menu">
		<ul>
			<li class="first current_page_item"><a href="home.php">Home</a></li>
			<li><a href="view_plots.php">Plots</a></li>
			<li><a href="apartments.php">Apartments</a></li>
			<li><a href="appointments.php">Appointments</a></li>
			<li><a href="sales.php">Sales</a></li>
			<li><a href="reports.php">Reports</a></li>
			<li><a href="complaint.php">Complaints</a></li>
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
			
	 		
				<p align="justify">
				 
The real estate industry has had some interesting ups and down over the past decade - NAR (National Association of Realtors) membership hit its all-time high back in 2006 with 1,357,000 realtors before dropping dramatically with the housing financial crisis. However, since its rock bottom in 2012 (with 999,000 members), it has been steadily increasing, and with nearly 1,100,000 members in 2014, the competition among realtors is heating up.</p>
 
<p align="justify">The competition is fierce, and these days you will need expert online and offline marketing skills to set yourself apart from the pack.
marketing for real estate</p>
	 
			</div>
			<div class="box" id="content-box1">
				<h3>New Appartments</h3>
				<ul class="section-list">
					<li class="first">
						<img class="pic alignleft" src="images/apt1.jpg" width="70" height="70" alt="" />
						<span>New apartment with 3 bedroom and 1 bathroom apartment.</span>
					</li>
					 
				</ul>
			</div>
			<div class="box" id="content-box2">
				<h3>Our new Ventures</h3>
				<p>
					New ventures and all new apartments are coming soon.
				</p>
				 
			</div>
			<br class="clearfix" />
		</div>
		<div id="sidebar">
			<div class="box">
					<h3>Plots for Sale</h3>
				<ul class="list">
				
				<!-- reading latest 3 plots from plots table -->
			 <?php
			 	include("db.php");
					  $res=mysql_query("select * from plots  ORDER BY id DESC LIMIT 3");
					  $a=1;
					  while($re=mysql_fetch_array($res))
					  {
					  
					  ?>
			
					<li><a href="view_plot.php?pid=<?php echo $re['id']; ?>"> 
                    <img src="images/plots/<?php echo $re['plot_img']; ?>" height="50" width="50">
                    </a>  <?php echo $re['plot_title']; ?></li>
			
				<?php
	}
	
?>	
					
				</ul>
			</div>
			<div class="box">
			 
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
<!--Close Body tag-->
</html>