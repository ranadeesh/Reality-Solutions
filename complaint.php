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
        <title>User Complaints page</title>
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
           <!-- Navigation Menu --> 
            <div id="menu">
                <ul>
           	<li><a href="home.php">Home</a></li>
			<li><a href="view_plots.php">Plots</a></li>
			<li><a href="apartments.php">Apartments</a></li>
			<li><a href="appointments.php">Appointments</a></li>
			<li><a href="sales.php">Sales</a></li>
			<li><a href="reports.php">Reports</a></li>
		 
                    <li  class="first current_page_item"><a href="complaint.php">Complaints</a></li>

                </ul>
                <br class="clearfix" />
            </div>

            <div id="page">
            


                    <div id="d1">
                        <h1> Write Us</h1>
                        <br />

<?php

         include("db.php");
		 if(isset($_POST['save']))
{
//collecting form data
$emp_id=$_POST['emp_id'];
$emp_name=$_POST['emp_name'];
 $subject=$_POST['subject'];
 $description=$_POST['description'];
 
     
	//inserting  data	
 	
		
		$query="INSERT INTO  complaints (emp_id, emp_name, subject, description) values($emp_id,'$emp_name','$subject','$description')";
		
    	$res=mysql_query($query);
    	
           // echo $query ;
			if($res)
			{
			echo "Successfully Sent";
			}
			else
			{
			die(mysql_error());
			}
		}
		
			?>
                            
                            
                            
                            
                <form action="#" method="post" enctype="multipart/form-data">
                           
                   <input type="hidden" name="emp_name" value="<?php echo $_SESSION['user'];	
?>" />

 <input type="hidden" name="emp_id" value="<?php echo $_SESSION['emp_id'];	
?>" />
                           
                                <table width="60%" height="297" border="0" cellpadding="0" cellspacing="0">
                                
                                
                                
                              
                                    <tr>
                                        <td width="14%">Subject :</td>
                                        <td width="86%">
                                            <input type="text" name="subject" value="" />
                                      </td>
                                    </tr>
                                  
                                    
                             
                                    <tr>
                                        <td>Description</td>
                                        <td>
                                            <textarea name="description" rows="3" cols="30"></textarea>
                                        </td>
                                    </tr>
                                   

                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input type="button" onClick="history.go(-1);" value="Go Back" />
                                            <input type="submit" name="save" value="send" />
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

    </html>