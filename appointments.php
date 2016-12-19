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
<title>Employee | Appointments Page</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="home.php">   <img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1> 
     
		</div>
		<div id="slogan">
			<h3> <a href="logout.php">Logout</a></h3>
		</div>
	</div>
	<!-- Navigation Menu -->
	<div id="menu">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="view_plots.php">Plots</a></li>
			<li><a href="apartments.php">Apartments</a></li>
			<li class="first current_page_item"><a href="appointments.php">Appointments</a></li>
			<li><a href="sales.php">Sales</a></li>
			<li><a href="reports.php">Reports</a></li>
		  <li><a href="complaint.php">Complaints</a></li>
		 
		</ul>
		<br class="clearfix" />
	</div>
	 
	<div id="page">
		
			<br /><br /><br /><br />
	        <table>
              <tr>
                <th>Date</th>
               
                <th>Time</th>
                 <th>With</th>
                 <th>Place </th>
                 <th>Contact Info</th>
				 <th>  </th>
              </tr>
              
            
            
              <!-- connecting to database -->
                        <?php
                      
                     
                        include("db.php");
					  $res=mysql_query("select * from appointments");
					  $a=1;
					  while($re=mysql_fetch_array($res))
					  {
					  
					  ?>
                            <tr>
                              
                                <td>
                                    <?php echo $re['date']; ?>
                                </td>
                                <td>
                                    <?php echo $re['time']; ?>
                                </td>
                                <td>
                                    <?php echo $re['withwhom']; ?>
                                </td>
                                <td>
                                    <?php echo $re['place']; ?>
                                </td>
                                <td>
                                    <?php echo $re['contactinfo']; ?>
                                </td>
                                <td><a href="view_appointment.php?aptmtid=<?php echo $re['id']; ?>">View</a>
                                    <a href="edit_appointment.php?aptmtid=<?php echo $re['id']; ?>">Edit</a>
                                    <a href="delete_appointment.php?aptmtid=<?php echo $re['id']; ?>" onClick="return confirm('Do you want delete this Appointment');">Delete</a></td>
                            </tr>
                            <?php
					  
					  }
					  ?>
                    </table>
                    <p>&nbsp;</p>

                    <p align="left"> <a href="add_appointment.php">Add New</a></p>

                    <br />
            
            
 
		
		
		<br class="clearfix" />
	</div>
<!-- footer bigin -->	
	
  <div id="footer">
     &copy; Reality Solutions. All rights reserved. 
     
    <br class="clearfix" />
     </div>  
    <!-- footer end --> 
</div>
</div>

</body>
</html>