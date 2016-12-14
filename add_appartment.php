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
<!--Header tag open -->
    <head>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Add Apartment</title>
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
            <div id="menu">
                <ul>
				<li> <a href="home.php"> Home </a></li>
                    <li class="current_page_item"><a href="view_plots.php">Plots</a></li>
                    <li><a href="apartments.php">Apartments</a></li>
                    <li><a href="appoinments.php">Appointments</a></li>
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
                        <h1> Apartment Details</h1>
                        <br />

                        <?php
			include("db.php");
		 if(isset($_POST['save']))
{
//collecting form data

 $apt_no=$_POST['apt_no'];	
			
 $apt_type=$_POST['apt_type'];
 
  $apt_title=$_POST['apt_title'];
  

 $contact=$_POST['contact'];
  $address=$_POST['address'];
  $monthly_rent=$_POST['monthly_rent']; 
 $lease_availability=$_POST['lease_availability'];
   $forsale=$_POST['forsale'];
     $description=$_POST['description'];
    //image fields
			  $apt_img_name=$_FILES['apt_img']['name'];
			  $apt_img_type=$_FILES['apt_img']['type'];
			  $apt_img_filesize=$_FILES['apt_img']['size'];
			  $apt_img_filetmp=$_FILES['apt_img']['tmp_name'];
	 $plot_img_name= $apt_no.$apt_img_name;
	
	//checking for plot_no exists or not
	
	 $res1=mysql_query("select apt_no from apartments where apt_no='$apt_no'");
			  $re1=mysql_num_rows($res1);
			  if($re1==1)
			  {
			//  echo "apt_no is already existed";
			    echo "<script>alert('Apartment No is already existed'); location.href='add_appartment.php';</script>";
			  }
			else
			{
			move_uploaded_file($apt_img_filetmp, "images//apartments//".$apt_img_name);  
            //moving uploaded image to folder
		 
		//adding new record to database	
		
		$query="INSERT INTO  apartments (  apt_no ,  apt_type , apt_title ,contact 
                ,address, monthly_rent,  lease_availability ,  forsale, description, apt_img) values('$apt_no','$apt_type','$apt_title','$contact','$address','$monthly_rent','$lease_availability','$forsale','$description','$apt_img_name')";
    	$res=mysql_query($query);
           // echo $query ;
			if($res)
			{
			echo " Successfully Apartment Details  Added <br>";
			}
			else
			{
			die(mysql_error());
			}
		}
	}		
 	?>
                            <form action="#" method="post" enctype="multipart/form-data">
                                <table width="100%" height="297" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td colspan="2">
                                            <input type="hidden" name="apt_img" value="" />

                                        </td>
                                    </tr>
                                    
                                    </tr>
									
									<tr>
                                        <td width="39%">Apartment No</td>
                                        <td width="61%">
                                            <input type="text" name="apt_no" value="" />
                                        </td>
                                    <tr>
                                        <td width="39%">Apartment Type</td>
                                        <td width="61%">
                                    											
											<select name="apt_type" />                                      
                                            <option value="commercialapt">Commercial Apartment</option>
                                            <option value="residencialapt">Residencial Apartment</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="39%">Apartment Title</td>
                                        <td width="61%">

                                            <input type="text" name="apt_title" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Contact No </td>
                                        <td>
                                            <input type="text" name="contact" value="" /> </td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>
                                           <textarea name="address" rows="3" cols="30"></textarea>
                                    </tr>
                                    <td>Monthly Rent</td>
                                    <td>
                                        <input type="text" name="monthly_rent" value="" /> </td>
                                    </tr>
                                    <td>Lease Availability</td>
                                    <td>
                                        <select name="lease_availability" />
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                        </select>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>For Sale</td>
                                        <td>
                                            <select name="forsale" />
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>
                                            <textarea name="description" rows="3" cols="30"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Upload Photo</td>
                                        <td>
                                            <input type="file" name="apt_img" />
                                        </td>
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
                < 

                <br class="clearfix" />
            </div>
            <div id="footer">
                &copy; Reality Solutions. All rights reserved.

                <br class="clearfix" />
            </div>
        </div>
        </div>

    </body>
<!--Close body tag-->
    </html>