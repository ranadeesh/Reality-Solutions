<?php
 //session start
 session_start();
 /*
  if(isset($_SESSION['user'])){
 $user = $_SESSION['user'];
 }
else
 {
 header("Location:index.php");
 }  */
 ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title> Edit Plot Details</title>
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
            <div id="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="current_page_item"><a href="view_plots.php">Plots</a></li>
                    <li><a href="apartments.php">Apartments</a></li>
                    <li><a href="appointments.php">Appointments</a></li>
                    <li><a href="sales.php">Sales</a></li>
                    <li><a href="reports.php">Reports</a></li>


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
                        <h1> Edit Plot Details</h1>
                     
                        <?php
                        include("db.php");
				if(isset($_POST['update']))
				{
				 
				 $plot_id=$_REQUEST['plot_id'];
			     $plot_no=$_REQUEST['plot_no'];
				$plot_type=$_REQUEST['plot_type'];
			  $address=$_REQUEST['address'];
			   $monthly_rent=$_REQUEST['monthly_rent'];
			   $lease_availability=$_REQUEST['lease_availability'];
			   
			  $ftmp=$_FILES['plot_img']['tmp_name'];
			  
			$plot_img_name=$_FILES['plot_img']['name'];
			  $plot_img_name= $plot_no.$plot_img_name;
			  
			  
			  
			  
			  $upd=mysql_query("update plots set plot_type='$plot_type',address='$address',monthly_rent='$monthly_rent',lease_availability='$lease_availability', plot_img= '$plot_img_name' where id= $plot_id");
			  
			  if($upd)
			  {
			  move_uploaded_file($ftmp,"images/plots/".$plot_img_name);
			   echo "<script>alert('Successfully updated');</script> ";
			  
			  }
			  else
			  {
			  die(mysql_error());
			  }
				
				
				}
				
				?>

          <?php
			 
			 // finding the record  in plots table
				$plot_id=$_GET['pid'];
			
				$res=mysql_query("select * from plots where id='$plot_id'");
				$re=mysql_fetch_array($res);
				?>

                                <form action="#" method="post" enctype="multipart/form-data">
                                  <input type="hidden" name="plot_no" value="<?php echo $re['plot_no']; ?>" />
                                  <input type="hidden" name="plot_id" value="<?php echo $plot_id; ?>" />
                                    <table width="100%" height="297" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                         <td width="39%"></td>
                                            <td colspan="2">
                                                
                                                <div><img src="images/plots/<?php echo $re['plot_img']; ?>" width="200" height="200" /></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="39%">Plot Type</td>
                                            <td width="61%">
                                                <input type="text" name="plot_type" value="<?php echo $re['plot_type']; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>
                                                <input type="text" name="address" value="<?php echo $re['address']; ?>" /> </td>
                                        </tr>
                                        <td>Monthly Rent</td>
                                        <td>
                                            <input type="text" name="monthly_rent" value="<?php echo $re['monthly_rent']; ?>" /> </td>
                                        </tr>
                                        <td>Lease Availability</td>
                                        <td>
                                            <input type="text" name="lease_availability" value="<?php echo $re['lease_availability']; ?>" /> </td>
                                        </tr>
                                        <td>Forsale</td>
                                        <td>
                                            <input type="text" name="forsale" value="<?php echo $re['forsale']; ?>" /> </td>
                                        </tr>
                                        <tr>
                                                                 
                                            <td colspan="2">
                                                <input type="file" name="plot_img" />
                                            </td>
                                             <td>&nbsp;</td>
                                        </tr>

                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <input type="button" onclick="history.go(-1);" value="Go Back" />
                                                <input type="submit" name="update" value="Update" />
                                                <input type="reset" name="cancel" value="cancel" />
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
