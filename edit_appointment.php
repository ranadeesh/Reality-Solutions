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

    <head>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title> Edit Appointment</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="jquery.js"></script>
    </head>

    <body>
        <div id="wrapper">
            <div id="header">
                <div id="logo
">
                    <h1><a href="home.php">   
           <img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1>

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
                    <li><a href="home.php">Home</a></li>
                    <li class="current_page_item"><a href="view_plots.php">Plots</a></li>
                    <li><a href="apartments.php">Apartments</a></li>
                    <li   class="first current_page_item"><a href="appointments.php">Appointments</a></li>
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
                        <h1> Edit Appointments Details</h1>
						<br><br>
                     
                        <?php
                        include("db.php");
				if(isset($_POST['update']))
				{
				 $aptmt_id =$_REQUEST['aptmt_id'];
				 $date=$_REQUEST['date'];
			     $time=$_REQUEST['time'];
				$withwhom=$_REQUEST['withwhom'];
			  $place=$_REQUEST['place'];
			   $contactinfo=$_REQUEST['contactinfo'];
			   
			  
			  
			  
 $upd=mysql_query("update appointments  set  date='$date' ,  time='$time' ,  withwhom='$withwhom' ,  place='$place' ,  contactinfo='$contactinfo' where id = $aptmt_id ");


			  
			  if($upd)
			  {
			 
			 //  echo "<script>alert('Successfully updated');</script> ";
			   echo "<script>alert('Successfully updated'); location.href='appointments.php';</script>";  
			  
			  }
			  else
			  {
			  die(mysql_error());
			  }
				
				
				}
				
				?>

          <?php
			 
			 // finding the record  in  apointnent in table
				$aptmt_id=$_GET['aptmtid'];
			
				$res=mysql_query("select * from appointments where id=$aptmt_id");
				$re=mysql_fetch_array($res);
				?>

                                <form action="#" method="post" >
                               
                                  <input type="hidden" name="aptmt_id" value="<?php echo $aptmt_id; ?>" />
                                    <table width="100%" height="297" border="0" cellpadding="0" cellspacing="0">
                                        
                                        <tr>
                                            <td width="33%">Date</td>
                                            <td width="67%">
                                                <input type="date" name="date" value="<?php echo $re['date']; ?>" />
                                          </td>
                                        </tr>
                                        <tr>
                                            <td>Time</td>
                                            <td>
                                                <input type="time" name="time" value="<?php echo $re['time']; ?>" /> </td>
                                        </tr>
                                        
                                         <tr>
                                        <td>With Whom</td>
                                        <td>
                                            <input type="text" name="withwhom" value="<?php echo $re['withwhom']; ?>" /> </td>
                                        </tr>
                                         <tr>
                                        <td>Place</td>
                                        <td>
                                            <input type="text" name="place" value="<?php echo $re['place']; ?>" /> </td>
                                        </tr>
                                        
                                          <td>Contact Info</td>
                                            <td>
                                            <input type="text" name="contactinfo" value="<?php echo $re['contactinfo']; ?>" /> </td>
                                       
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <input type="button" onClick="history.go(-1);" value="Go Back" />
                                                <input type="submit" name="update" value="Update" />
                                                <!--<input type="reset" name="cancel" value="cancel" />-->
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </form>

<br /><br /><br /><br /><br /><br />
 

                                <br class="clearfix" />



                    </div>
                </div>

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
