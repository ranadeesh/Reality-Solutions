<?php
 
//session start  
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
<!--Header tag open -->
    <head>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Employee | Add Plot</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="jquery.js"></script>
    </head> 
	<!--Header tag close-->
	<!--Body tag open -->
    <body>
        <div id="wrapper">
            <div id="header">
                <div id="logo">

                    <h1><a href="home.php">   
           <img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1>


                    </a>
                    </h1>
                </div>
                <div id="slogan">
                    <?php 
		 if(isset($_SESSION['user'])){  ?>
                        <h3> <a href="logout.php">Logout</a></h3>

                        <?php }   ?>
                </div>
            </div>
            
            <!-- Navigation Menu -->
            <div id="menu">
                <ul>
                    	<li><a href="index.php">Home</a></li>
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
                <div id="content">


                    <script>
                        function del(n) {

                            alert(n);
                        }
                    </script>

                    <div id="d1">
                        <h1> Appointments Details</h1>
                        <br />

                        <?php
			include("db.php");
		 if(isset($_POST['save']))
{
//collecting form data

 $date=$_POST['date'];			
 $time=$_POST['time'];
 
  $with=$_POST['with'];
  
  $place=$_POST['place'];
 $contactinfo=$_POST['contactinfo'];

  
	
	//inserts  new appointment
	

		
		$query="INSERT INTO  appointments (  date ,  time ,  withwhom ,  place,
                 contactinfo ) values('$date','$time','$with','$place','$contactinfo')";
    	$res=mysql_query($query);
          // echo $query ;
			if($res)
			{
			echo "Appointment Added <br>";
			}
			else
			{
			die(mysql_error());
			}
		 
	}		
 	?>
 	
 	<!-- form for inserting new appointment -->
 	
 	
                            <form action="#" method="post">
                                <table width="100%" height="297" border="0" cellpadding="0" cellspacing="0">
                                    
                                    <tr>
                                        <td width="29%">Date</td>
                                        <td width="71%">
                                            <input type="date" name="date" value="" />
                                      </td>
                                    </tr>
                                    
                                    <tr>
                                        <td width="29%">Time</td>
                                        <td width="71%">

                                            <input type="time" name="time" value="" />
                                      </td>
                                    </tr>
                              
                                    <tr>
                                        <td>With Whom </td>
                                        <td>
                                            <input type="text" name="with" value="" /> </td>
                                    </tr>
                                        
                                    
                                    
                                    <td>Place</td>
                                    <td>
                                        <input type="text" name="place" value="" /> </td>
                                    </tr>
                                     <tr>
                                        <td>Concact Info </td>
                                        <td>
                                            <input type="text" name="contactinfo" value="" /> </td>
                                    </tr>
                                  
                                     
                                     
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input type="button" onClick="history.go(-1);" value="Go Back" />
                                            <input type="submit" name="save" value="Add" />
                                            <input type="reset" name="cancel" value="cancel" />
                                        </td>
                                    </tr>
                                </table>
                            </form>


                            <br class="clearfix" />



                    </div>
                </div>

                <br class="clearfix" />
                
             <!-- footer start here -->   
                
            </div>
            <div id="footer">
                &copy; Reality Solutions. All rights reserved.

                <br class="clearfix" />
            </div>
            
            
            <!-- footer end here -->   
        </div>
        </div>

    </body>
<!--Close body tag-->
    </html>