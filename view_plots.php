<?php
 //session start
 session_start();
if(isset($_SESSION['user'])){
 $user = $_SESSION['user'];
 }
else
 {
 header("Location:index.php");  //redirecting to index page
 }
 ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Employee | View Plots</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="jquery.js"></script>
        <script src="modify_records.js"></script>
    </head>
<!--Body tag stars -->
    <body>
        <div id="wrapper">
            <div id="header">
                <div id="logo">
                    <h1><a href="index.php">   <img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1>

                </div>
                <div id="slogan">
                    <h3> <a href="logout.php">Logout</a></h3>
                </div>
            </div>
            <div id="menu">
                <ul>

                    <li><a href="index.php">Home</a></li>
                    <li class="first current_page_item"><a href="view_plots.php">Plots</a></li>
                    <li><a href="apartments.php">Apartments</a></li>
                    <li><a href="appointments.php">Appointments</a></li>
                    <li><a href="sales.php">Sales</a></li>
                    <li><a href="reports.php">Reports</a></li>

                </ul>
                <br class="clearfix" />
            </div>

            <div id="page">
                <div id="content">

                    <br />
                    <br />

                    <table width="100%" border="0" cellspacing="0" cellpadding="0" border="1">
                        <tr>
                            <th>PLOT ID</th>
                            <th>PLOT TYPE</th>
                            <th>ADDRESS</th>
                            <th>MONTHLY RENT</th>
                            <th>LEASE AVAILABILITY</th>
                            <th>FORSALE </th>
                            <th> </th>
                        </tr>
                        <!-- connecting to database -->
                        <?php
                      
                     
                        include("db.php");
					  $res=mysql_query("select * from plots");
					  $a=1;
					  while($re=mysql_fetch_array($res))
					  {
					  
					  ?>
                            <tr>
                                <td>
                                    <?php echo $a; ?>
                                </td>
                                <td>
                                    <?php echo $re['plot_type']; ?>
                                </td>
                                <td>
                                    <?php echo $re['address']; ?>
                                </td>
                                <td>
                                    <?php echo $re['monthly_rent']; ?>
                                </td>
                                <td>
                                    <?php echo $re['lease_availability']; ?>
                                </td>
                                <td>
                                    <?php echo $re['forsale']; ?>
                                </td>
                                <td><a href="view_plot.php?pid=<?php echo $re['id']; ?>">View</a>
                                    <a href="edit_plot.php?pid=<?php echo $re['id']; ?>">Edit</a>
                                    <a href="delete_plot.php?pid=<?php echo $re['id']; ?>" onclick="return confirm('Do you want delete this Plot');">Delete</a></td>
                            </tr>
                            <?php
					  $a++;
					  }
					  ?>
                    </table>
                    <p>&nbsp;</p>

                    <p align="left"> <a href="add_plot.php">Add New</a></p>

                    <br />

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
