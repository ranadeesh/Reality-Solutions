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
        <title>Bigbusiness by TEMPLATED</title>
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
                    <li><a href="view_plots.php">Plots</a></li>
                    <li><a href="#">Apartments</a></li>
                    <li><a href="#">Appointments</a></li>
                    <li><a href="#">Sales</a></li>
                    <li><a href="#">Reports</a></li>
 <li class="current_page_item"><a href="complaint.php">Complaints</a></li>

                </ul>
                <br class="clearfix" />
            </div>

            <div id="page">
                <div id="content">


                    <div id="d1">
                        <h1> Write Us</h1>
                        <br />

                        <?php
			include("db.php");
		 if(isset($_POST['save']))
{
//collecting form data


 $subject=$_POST['subject'];
  $description=$_POST['description'];
 
     
	//inserting  data	
 	
		
		$query="INSERT INTO  complaints (  subject ,  description) values('$subject','$description')";
    	$res=mysql_query($query);
           // echo $query ;
			if($res)
			{
			echo "Successfully sent";
			}
			else
			{
			die(mysql_error());
			}
		}
		
 



			?>
                            <form action="#" method="post" enctype="multipart/form-data">
                                <table width="60%" height="297" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td colspan="2">
                                            <input type="hidden" name="eid" value="" />

                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="39%">subject :</td>
                                        <td width="61%">
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
                                            <input type="button" onclick="history.go(-1);" value="Go Back" />
                                            <input type="submit" name="save" value="send" />
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

    </html>