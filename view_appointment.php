<?php
 // session start
 
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
        <title>Employee | View Appointment</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="jquery.js"></script>
    </head>

    <body>
        <div id="wrapper">
            <div id="header">
                <div id="logo">

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
                    <li><a href="view_plots.php">Plots</a></li>

                    <li><a href="apartments.php">Apartments</a></li>
                    <li  class="current_page_item"><a href="appointments.php">Appointments</a></li>
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
                        <h1> Appointment Details</h1>
                        <br />

                        <?php
			 
				$aptmt_id=$_GET['aptmtid'];
				include("db.php");
				$res=mysql_query("select * from appointments where id='$aptmt_id'");
				$re=mysql_fetch_array($res);
				?>

                            <form action="reset" method="post">
                                <input type="hidden" name="aptmtid" id="aptmtid" value="<?php echo $re['id']; ?>" />
                              
                                <table width="100%" height="297" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                         <td>Date</td><td width="50%"> <?php echo $re['date']; ?></td>  </tr>
                                         <tr>
                                             <td>Time</td>
                                              <td>  <?php echo $re['time']; ?></td>
                                                    </tr>
                                               <tr>
                                        <td>With</td>
                                        <td>
                                            <?php echo $re['withwhom']; ?>
                                        </td>
                                    </tr>  
                                     
                                    <tr>
                                        <td>Place</td>
                                        <td>
                                            <?php echo $re['place']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="39%">Contact Info</td>
                                        <td width="61%">
                                            <?php echo $re['contactinfo']; ?>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input type="button" onclick="history.go(-1);" value="Go Back" />
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </table>
                            </form>


                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
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
