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
        <title>Employee | View Plot</title>
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
					<!--Highlighting the current tab-->
                    <li class="current_page_item"><a href="view_plots.php">Plots</a></li>
                    <li><a href="apartments.php">Apartments</a></li>
                    <li><a href="appointments.php">Appointments</a></li>
                    <li><a href="sales.php">Sales</a></li>
                    <li><a href="reports.php">Reports</a></li>
                    <li><a href="complaint.php">Complaints</a></li>


                </ul>
                <br class="clearfix" />
            </div>

            <div id="page">
               


                    <script>
                        function del(n) {

                            alert(n);
                        }

                    </script>

                    <div id="d1">
                        <h1> Plot Details</h1>
                        <br />

                        <?php
			 
				$plot_id=$_GET['pid'];
				include("db.php");
				$res=mysql_query("select * from plots where id='$plot_id'");
				$re=mysql_fetch_array($res);
				?>

                            <form action="buy_now.php" method="post">
                                <input type="hidden" name="pid" id="pid" value="<?php echo $re['id']; ?>" />
                                 <input type="hidden" name="property_no" id="plot_no" value="<?php echo $re['plot_no']; ?>" />
                                <input type="hidden" name="total" id="total" value="<?php echo $re['monthly_rent']; ?>" />
                                <input type="hidden" name="property_type" id="property_type" value="<?php echo $re['plot_type']; ?>" />
                                <table width="100%" height="297" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="35%"><p id="ptitle"><?php echo $re['plot_title']; ?></p>
                                            <p align='justify'> <b>Description:</b>
                                                <?php echo $re['description']; ?>
                                                    <br>
                                                    <b>Contact:</b>
                                                    <?php echo $re['contact']; ?>
                                            </p>
                                      </td>
                                        <td colspan="2">
                                            <div><img src="images/plots/<?php echo $re['plot_img']; ?>" width="200" height="200" /></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="35%">PlotyType</td>
                                        <td width="65%">
                                            <?php echo $re['plot_type']; ?>                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>
                                            <?php echo $re['address']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="35%">Monthly Rent</td>
                                        <td width="65%">
                                            <?php echo $re['monthly_rent']; ?>                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="35%">Lease Availability</td>
                                        <td width="65%">
                                            <?php echo $re['lease_availability']; ?>                                        </td>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input type="button" onClick="history.go(-1);" value="Go Back" />
                                            <input type="submit" name="submit" value="Buy Now" />
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
