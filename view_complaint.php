<?php
 // session start
 
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
        <title>Admin | View Complaint</title>
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
            <!-- Navigation Menu -->
            <div id="menu">
                 <ul>
            <li><a href="admin_home.php">Home</a></li>
			<li><a href="view_users.php">View Users</a></li>
			<li><a href="adduser.php">Add User</a></li>
			<li><a href="edituser.php">Edit User</a></li>
			<li><a href="delete_user.php">Delete User</a></li>
		 	<li><a href="view_user.php">View User</a></li>
		 	
	<li  class="first current_page_item"><a href="view_complaints.php">Notifications</a></li>
	
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
                        <h1> Complaint Details</h1>
                        <br />

                        <?php
			 
				$cid=$_GET['cid'];
				include("db.php");
				$res=mysql_query("select * from complaints where id='$cid'");
				$re=mysql_fetch_array($res);
				?>

                           <form action ="delete_complaint.php" method="get">
						   <input type= "hidden" name="cid" value="<?php echo $cid; ?>" />
                                <table width="100%" height="297" border="0" cellpadding="0" cellspacing="0">
                                  <tr>
                                        <td>Enployee Id</td>
                                        <td>
                                            <?php echo $re['emp_id']; ?>
                                        </td>
                                    </tr>
                             
                                    <tr>
                                        <td>Enployee Name</td>
                                        <td>
                                            <?php echo $re['emp_name']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="35%">Description</td>
                                        <td width="65%">
                                            <?php echo $re['description']; ?> </td>
                                    </tr>
                                     

                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input type="button" onClick="history.go(-1);" value="Go Back" />
											
											<input type="submit"  value="Delete"  onClick="return confirm('Do you want delete this Complaint?');"/>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </table>
                            </form>


                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
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
