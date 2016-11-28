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
<!--Header tag open -->
    <head>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Add Plot</title>
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
                    <li class="current_page_item"><a href="view_plots.php">Plots</a></li>
                    <li><a href="#">Apartments</a></li>
                    <li><a href="#">Appointments</a></li>
                    <li><a href="#">Sales</a></li>
                    <li><a href="#">Reports</a></li>


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
                        <h1> Plot Details</h1>
                        <br />

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
			  echo "plot_no is already existed";
			  }
			else
			{
			move_uploaded_file($plot_img_filetmp, "images//plots//".$plot_img_name);  
            //moving uploaded image to folder
		 
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
                                        <td width="39%">Plot No</td>
                                        <td width="61%">
                                            <input type="text" name="plot_no" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="39%">Plot Type</td>
                                        <td width="61%">
                                            <select name="plot_type" />
                                            <option>Commercial</option>
                                            <option>Residencial</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="39%">Plot Title</td>
                                        <td width="61%">

                                            <input type="text" name="plot_title" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ConcactNo </td>
                                        <td>
                                            <input type="text" name="contact" value="" /> </td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>
                                            <input type="text" name="address" value="" /> </td>
                                    </tr>
                                    <td>Monthly Rent</td>
                                    <td>
                                        <input type="text" name="monthly_rent" value="" /> </td>
                                    </tr>
                                    <td>Lease Availability</td>
                                    <td>
                                        <select name="lease_availability" />
                                        <option>Yes</option>
                                        <option>No</option>
                                        </select>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>Forsale</td>
                                        <td>
                                            <select name="forsale" />
                                            <option>Yes</option>
                                            <option>No</option>
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
                                            <input type="button" onclick="history.go(-1);" value="Go Back" />
                                            <input type="submit" name="save" value="Add" />
                                            <input type="reset" name="cancel" value="cancel" />
                                        </td>
                                    </tr>
                                </table>
                            </form>


                            <br class="clearfix" />



                    </div>
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