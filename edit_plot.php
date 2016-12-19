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
    <!DOCTYPE>

    <html>

    <head>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title> Employee | Edit Plot Details</title>
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
                    <li><a href="home.php">Home</a></li>
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
                        <h1> Edit Plot Details</h1>
                     <br><br>
                        <?php
                        include("db.php");
				if(isset($_POST['update']))
				{
				 
				 $plot_id=$_REQUEST['plot_id'];
			     $plot_no=$_REQUEST['plot_no'];
				$plot_type=$_REQUEST['plot_type'];
				$plot_title=$_REQUEST['plot_title'];
				$description=$_REQUEST['description'];
			  $address=$_REQUEST['address'];
			   $monthly_rent=$_REQUEST['monthly_rent'];
			   $lease_availability=$_REQUEST['lease_availability'];
			    $forsale=$_REQUEST['forsale'];
			   
			 
			  
			  
			  
			  
			  $upd=mysql_query("update plots set  plot_title = '$plot_title', description='$description', plot_type='$plot_type',address='$address',monthly_rent='$monthly_rent',lease_availability='$lease_availability', forsale= '$forsale' where id= $plot_id");
			  
			  if($upd)
			  {
			  
			   //echo "<script>alert('Successfully updated');</script> ";
			   echo "<script>alert('Successfully updated'); location.href='view_plots.php';</script>";  
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
								
                                    <table width="100%" height="297" border="0" cellpadding="10" cellspacing="20">
                                        <tr>
                                         <td width="28%">										 </td>
                                            <td colspan="2">
                                                
                                                <div><img src="images/plots/<?php echo $re['plot_img']; ?>" width="200" height="200" /></div>
                                            </td>
                                        </tr>
										 <tr>
                                         <td width="28%">Plot Title:										 </td>
                                            <td colspan="2">
                                                
                                              <input type="text"  name="plot_title"  value="<?php echo $re['plot_title']; ?>" >
                                            </td>
                                        </tr>
										 <tr>
                                         <td width="28%">Description:										 </td>
                                            <td colspan="2">
                                                
                                                 <textarea name="description" ><?php echo $re['description']; ?> </textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="28%">Plot Type</td>
                                            <td width="63%">
                                            
											<select name="plot_type" />                                      
                                            <option value="Commercial Plot">Commercial Plot</option>
                                            <option value="Residencial Plot">Residencial Plot</option>
                                            </select>
                                                
                                          </td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>
                                                <textarea name="address" ><?php echo $re['address']; ?> </textarea> </td>
                                        </tr>
                                        <td>Monthly Rent</td>
                                        <td>
                                            <input type="text" name="monthly_rent" value="<?php echo $re['monthly_rent']; ?>" /> </td>
                                        </tr>
                                        <td>Lease Availability</td>
                                        <td>
                                            <select name="lease_availability" />                                      
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                            </select>
											 </td>
                                        </tr>
                                        <td>For Sale</td>
                                        <td>
                                            
											     <select name="forsale" />                                      
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                            </select>
											
											 </td>
                                        </tr>
                                       

                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <input type="button" onClick="history.go(-1);" value="Go Back" />
                                                <input type="submit" name="update" value="Update" />
                                                <input type="reset" name="cancel" value="cancel" />
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </form>

<br /><br /><br /><br /><br /><br />
 

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
