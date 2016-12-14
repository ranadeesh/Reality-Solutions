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
                        <h1> Edit Apartments Details</h1>
                     <br><br><br><br>
                        <?php
                        include("db.php");
				if(isset($_POST['update']))
				{
				 
				 $apt_id=$_REQUEST['apt_id'];
			     $apt_no=$_REQUEST['apt_no'];
				$apt_type=$_REQUEST['apt_type'];
				 $contact=$_REQUEST['contact'];
			  $address=$_REQUEST['address'];
			   $monthly_rent=$_REQUEST['monthly_rent'];
			   $lease_availability=$_REQUEST['lease_availability'];
			   
			//  $ftmp=$_FILES['apt_img']['tmp_name'];
			  
			//$apt_img_name=$_FILES['apt_img']['name'];
			 // $apt_img_name= $apt_no.$apt_img_name;
			  
			  
			  
			  
			  $upd=mysql_query("update apartments set apt_type='$apt_type',contact='$contact',address='$address',monthly_rent='$monthly_rent',lease_availability='$lease_availability' where id= $apt_id");
			  
			  if($upd)
			  {
			 // move_uploaded_file($ftmp,"images/apartments/".$apt_img_name);
			   echo "<script>alert('Successfully updated');</script> ";
			   echo "<script>alert('Successfully updated'); location.href='apartments.php';</script>";  
			  
			  }
			  else
			  {
			  die(mysql_error());
			  }
				
				
				}
				
				?>

          <?php
			 
			 // finding the record  in apartments table
				$apt_id=$_GET['aptid'];
			
				$res=mysql_query("select * from apartments where id='$apt_id'");
				$re=mysql_fetch_array($res);
				?>

                                <form action="#" method="post" enctype="multipart/form-data">
                                  <input type="hidden" name="apt_no" value="<?php echo $re['apt_no']; ?>" />
                                  <input type="hidden" name="apt_id" value="<?php echo $apt_id; ?>" />
                                    <table width="100%" height="297" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                         <td width="29%"></td>
                                            <td colspan="2">
                                                
                      <div><img src="images/apartments/<?php echo $re['apt_img']; ?>" width="200" height="200" /></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="29%">Apartment Type</td>
                                            <td width="62%">
                                               
												
												<select name="apt_type" />                                      
                                            <option value="commercialapt">Commercial Apt</option>
                                            <option value="residencialapt">Residencial Apt</option>
                                            </select>
                                          </td>
                                        </tr>
										  <tr>
                                            <td>Contact No</td>
                                            <td>
                                                <input type="text" name="contact" value="<?php echo $re['contact']; ?>" > </td>
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
											
											
                                        </tr>
											</td>
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
