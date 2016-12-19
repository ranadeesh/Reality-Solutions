<?php
 //session start
ob_start();
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
<title>Sales page</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!--<link rel="stylesheet" type="text/css" href="style.css" />-->
<link rel="stylesheet" type="text/css" href="style2.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.dropotron-1.0.js"></script>

<script type="text/javascript">
	$(function() {
		$('#menu > ul').dropotron({
			mode: 'fade',
			globalOffsetY: 11,
			offsetY: -15
		});
		
	});
</script>
</head>
<body>
<div id="wrapper">
  <div id="header">
    <div id="logo">
      <h1><a href="home.php"> <img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1>
    </div>
    <div id="slogan">
    <h3> <a href="logout.php">Logout</a></h3>
    </div>
  </div>
  <div id="menu">
  
  
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="view_plots.php">Plots</a></li>
          <li><a href="apartments.php">Apartments</a></li>
          <li><a href="appointments.php">Appointments</a></li>
         
        
		    <li class="first">
        <span class="opener"><a href="vew_sale_plots.php">Sales</a></span>
        <ul>
          <li><a href="vew_vacant_plots.php">Vacant Plots</a></li>
          <li><a href="vew_sale_plots.php">Sold Plots</a></li>
		  </ul></li>
		  <li><a href="reports.php">Reports</a></li>
			<li> <a href="complaint.php">Complaints</a></li>
        </ul>
    
 
  </div>
  <br class="clearfix" />

  <br/><br/><br/><br/><br/>

  <table>
    <tr>
    <th>SL No</th>
      <th>Property Type</th>
      <th>Property No</th>
      <th>Sale Value</th>
      <th>Sold </th>
      <th>Date of Sale  </th>
    
      <th>Contact Info</th>
   
    </tr>
 
                         
                        <!-- connecting to database -->
                        <?php
                      
                     
                        include("db.php");
					  $res=mysql_query("select * from sales");
				    $a=1;
					  while($re=mysql_fetch_array($res))
					  {
					  
					  ?>
                            <tr>
                                <td>
                                    <?php echo $a; ?>
                                </td>
                                <td>
                                    <?php echo $re['property_type']; ?>
                                </td>
                                <td>
                                    <?php echo $re['property_no']; ?>
                                </td>
                                <td>
                                    <?php echo $re['sale_value']; ?>
                                </td>
                                <td>
                                    <?php echo $re['sold']; ?>
                                </td>
                                <td>
                                    <?php echo $re['date_of_sale']; ?>
                                </td>
                                  <td>
                                    <?php echo $re['contactinfo']; ?>
                                </td>
                                
                            </tr>
                            <?php
					 $a++;
					  }
					  ?>
                    </table>
					
					<br/><br/><br/><br/>

  <div id="footer"> &copy; Reality Solutions. All rights reserved. <br class="clearfix" />
  </div>
</div>
</div>
</body>
</html>