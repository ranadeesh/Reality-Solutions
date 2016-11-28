<?php
 //session start
 session_start();
if(isset($_SESSION['user'])){
 $user = $_SESSION['user'];
 }
else
 {
 header("Location:index.php");  //redirecting to index page
 }
 ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Admin | Complaints page</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="jquery.js"></script>
        <script src="modify_records.js"></script>
    </head>

    <body>
        <div id="wrapper">
            <div id="header">
                <div id="logo">
                    <h1><a href="index.php">   <img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1>

                </div>
                <div id="slogan">
                    <h3> <a href="logout.php">Logout</a></h3>
                </div>
            </div>
            <div id="menu">
                <ul>
            <li><a href="index.php">Home</a></li>
			<li><a href="viewusers.php">View Users</a></li>
			<li><a href="adduser.php">Add User</a></li>
			<li><a href="edituser.php">Edit User</a></li>
			<li><a href="delete_user.php">Delete User</a></li>
		 	<li><a href="view_user.php">View User</a></li>
		 	
	<li  class="first current_page_item"><a href="view_complaints.php">Notifications</a></li>
	
                </ul>
                <br class="clearfix" />
            </div>

            <div id="page">
                <div id="content">

                    <br />
                    <br />

                    <table width="100%" border="0" cellspacing="0" cellpadding="0" border="1">
                        <tr>
                            <th> ID</th>
                            <th>SUBJECT</th>
                            <th>DESCRIPTION</th>
                           
                        </tr>
                        <! connecting to database -->
                        <?php
                      
                     
                        include("db.php");
					  $res=mysql_query("select * from complaints");
					
					  while($re=mysql_fetch_array($res))
					  {
					  
					  ?>
                            <tr>
                               
                                <td>
                                    <?php echo $re['id']; ?>
                                </td>
                                <td>
                                    <?php echo $re['subject']; ?>
                                </td>
                                <td>
                                    <?php echo $re['description']; ?>
                                </td>
                               
                            </tr>
                            <?php
					  
					  }
					  ?>
                    </table>
                   

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
