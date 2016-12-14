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
                    <li><a href="home.php">Home</a></li>
                    <li><a href="view_plots.php">Plots</a></li>
                    <li><a href="apartments.php">Apartments</a></li>
                    <li><a href="appointments.php">Appointments</a></li>
                    <li><a href="sales.php">Sales</a></li>
					<li class="first current_page_item"><a href="reports.php">Reports</a></li>
					<li> <a href="complaint.php"> Complaints </a> </li>

                </ul>
                <br class="clearfix" />
            </div>

            <div id="page">
                        <br />
                        <br />
                        <table>
                            <tr>
                                <th>Sl No </th>
                                <th>Plot/Appartment</th>
                                <th>Address</th>
                                <th>Sold To</th>
                                <th>Sold Amount</th>
                                <th>Sold Date</th>
                                <th>Payment Done</th>
                                 
                            </tr>
                               <!-- connecting to database -->
                        <?php
                      
                     
                        include("db.php");
					  $res=mysql_query("select * from reports");
				    $a=1;
					  while($re=mysql_fetch_array($res))
					  {
					  
					  ?>
                            <tr>
                                <td>
                                    <?php echo $a; ?>
                                </td>
                                <td>
                                    <?php echo $re['solditem_type']; ?>
                                </td>
                                <td>
                                    <?php echo $re['address']; ?>
                                </td>

                                <td>
                                    <?php echo $re['sold_to']; ?>
                                </td>
                                                                 <td>
                                    <?php echo $re['sold_amount']; ?>
                                </td>
                                 <td>
                                    <?php echo $re['sold_date']; ?>
                                </td>
                                <td>
                                    <?php echo $re['payment_done']; ?>
                                </td>
                                                              
                            </tr>
                            <?php
					 $a++;
					  }
					  ?>
                    </table>
               


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
