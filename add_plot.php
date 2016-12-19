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
<!--Header tag open -->
    <head>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Employee | Add Plot</title>
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
                    <li><a href="index.php">Home</a></li>
                    <li class="first current_page_item"><a href="view_plots.php">Plots</a></li>
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

                    <div id="d1"> <br />
                        <h1>Add Plot Details</h1>
                        <br /> <br />

                        <?php
			include("db.php");
		 if(isset($_POST['save']))
{
//collecting form data

 $plot_no=$_POST['plot_no'];			
 $plot_type=$_POST['plot_type'];
 
  $plot_title=$_POST['plot_title'];
  

 $contact=$_POST['contact'];
  $address=$_POST['address'];
  $monthly_rent=$_POST['monthly_rent']; 
 $lease_availability=$_POST['lease_availability'];
   $forsale=$_POST['forsale'];
     $description=$_POST['description'];
    //image fields
			  $plot_img_name=$_FILES['plot_img']['name'];
			  $plot_img_type=$_FILES['plot_img']['type'];
			  $plot_img_filesize=$_FILES['plot_img']['size'];
			  $plot_img_filetmp=$_FILES['plot_img']['tmp_name'];
	 $plot_img_name= $plot_no.$plot_img_name;
	
	//checking for plot_no exists or not
	
	 $res1=mysql_query("select plot_no from plots where plot_no='$plot_no'");
			  $re1=mysql_num_rows($res1);
			  if($re1==1)
			  {
			 
			   echo "<script>alert('PlotNo is already existed'); location.href='add_plot.php';</script>";
			  }
			else
			{
			  //moving uploaded image to folder
			move_uploaded_file($plot_img_filetmp, "images//plots//".$plot_img_name);  
           
		 
		//adding new record to database	
		
		$query="INSERT INTO  plots (  plot_no ,  plot_type ,  plot_title ,  description
                ,address, monthly_rent,  lease_availability ,  forsale ,  plot_img ,  contact ) values('$plot_no','$plot_type','$plot_title','$description','$address','$monthly_rent','$lease_availability','$forsale','$plot_img_name','$contact')";
    	$res=mysql_query($query);
           // echo $query ;
			if($res)
			{
			echo " Successfully Plot Details  Added <br>";
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
                                            <input type="hidden" name="plot_img" value="" />

                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="22%">Plot No</td>
                                        <td width="78%">
                                            <input type="text" name="plot_no" value="" />
                                      </td>
                                    </tr>
                                    <tr>
                                        <td width="22%">Plot Type</td>
                                        <td width="78%">
                                            <select name="plot_type" />                                      
                                            <option value="Commercial Plot">Commercial Plot</option>
                                            <option value="Residencial Plot">Residencial Plot</option>
                                            </select>
                                      </td>
                                    </tr>
                                    <tr>
                                        <td width="22%">Plot Title</td>
                                        <td width="78%">

                                            <input type="text" name="plot_title" value="" />
                                      </td>
                                    </tr>
                                    <tr>
                                        <td>Concact No </td>
                                        <td>
                                            <input type="text" name="contact" value="" /> </td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>
                                            <textarea name="address"> </textarea></td>
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
                                            <input type="file" name="plot_img" />
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