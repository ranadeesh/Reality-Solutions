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
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Reports Page</title>
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
            <div id="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="view_plots.php">Plots</a></li>
                    <li><a href="apartments.php">Apartments</a></li>
                    <li><a href="appointments.php">Appointments</a></li>
                    <li><a href="sales.php">Sales</a></li>
                    <li class="first current_page_item"><a href="reports.php">Reports</a></li>


                </ul>
                <br class="clearfix" />
            </div>

            <div id="page">
                <div id="content">
                    <?php
			
			 
			echo " Reports page <br> ";
			
			?>
                        <br />
                        <br />
                        <br />
                        <br />
                        <table border="1" width="80%">
                            <tr>
                                <th>SaleI_tem_type </th>
                                <th>plot/appartment</th>
                                <th>address</th>
                                <th>sold_to</th>
                                <th> sold_amount</th>
                                <th>balance</th>
                                <th> payment_dond</th>
                                <th> payment_remaining</th>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
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
            <!-- footer bigin -->

            <div id="footer">
                &copy; Reality_Solutions. All rights reserved.

                <br class="clearfix" />
            </div>
            <!-- footer end -->
        </div>
        </div>

    </body>

    </html>
