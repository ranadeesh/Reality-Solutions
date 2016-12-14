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
    <!DOCTYPE html>
    <html>

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
                    <h1><a href="admin_home.php">   <img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1>

                </div>
                <div id="slogan">
                    <h3> <a href="logout.php">Logout</a></h3>
                </div>
            </div>
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
                <div id="content">

                    <br />
                    <br />

                    <table width="100%" border="0" cellspacing="0" cellpadding="0" border="1">
                        <tr>
                            <th>Sl No</th>
                            <th>Subject</th>
                            <th>Description</th>
                           
                        </tr>
                        <! connecting to database -->
                        <?php
                      
                     
                        include("db.php");
					  $res=mysql_query("select * from complaints");
					 $a=1;
					  while($re=mysql_fetch_array($res))
					  {
					  
					  ?>
                            <tr>
                               
                                <td>
                                    <?php echo $a; ?>
                                </td>
                                <td>
                                    <?php echo $re['subject']; ?>
                                </td>
                                <td>
                                    <?php echo $re['description']; ?>
                                </td>
                               
                            </tr>
                            <?php
					  $a++;
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
