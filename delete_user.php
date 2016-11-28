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
        <title>Delete User</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="jquery.js"></script>
        <style type="text/css">
            #d1 
            {
                display: none;
            }

        </style>
    </head>
<!--Header tag opens -->
    <body>
        <div id="wrapper">
            <div id="header">
                <div id="logo">

                    <h1><a href="admin_home.php">   
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
                      
 <li><a href="admin_home.php">Home</a></li>
			<li><a href="view_users.php">View Users</a></li>
			<li><a href="adduser.php">Add User</a></li>
			<li><a href="edituser.php">Edit User</a></li>
			<li class="first current_page_item"><a href="delete_user.php">Delete User</a></li>
<li><a href="view_user.php">View User</a></li>
		 		<li><a href="view_complaints.php">Notifications</a></li>
			 


                </ul>
                <br class="clearfix" />
            </div>

            <div id="page">
                <div id="content">

                    <p>
                        Enter Employee Id :
                        <input type="text" id="eid" />
                         <input type="button" id="btn" value="Go" />

                    </p>

                    <script>
                        $(document).ready(function() {

                        
                              $("#btn").click(function() {

                                var eid = $("#eid").val();                               

                                //alert(eid);

                                if (eid != '') {

                                    var dataString = 'eid=' + eid;

                                    // AJAX Code To Submit Form.
                                    $.ajax({
                                        type: "GET",
                                        url: "edituser2.php",
                                        data: dataString,

                                        cache: false,

                                        success: function(result) {
                                                                                    
                                             $("#d1").show(1000);
                                            var userdetails = JSON.parse(result);
                                            $("#empid").val(userdetails[0].emp_id);
                                            for (var i in userdetails) {
                                                var row = userdetails[i];
                                            //appending row in table body
                                            
                                            
                                                var rows1 = "<tr>" + "<td>EmpId :</td> <td>" + row['emp_id'] + "</td></tr>" + " <td>firstname :</td><td>" + row['firstname'] + "</td></tr>" + " <td>lastname :</td><td>" + row['lastname'] + "</td></tr>" + " <td>password :</td><td>" + row['password'] + "</td></tr>" + " <td>email :</td><td>" + row['email'] + "</td></tr>" + " <td>address : </td><td>" + row['address'] + "</td></tr>" + " <td>gender :</td><td>" + row['gender'] + "</td></tr>" + " <td>maritalstatus :</td><td>" + row['maritalstatus'] + "</td></tr>"

                                                $('#tblUsers tbody').append(rows1);

                                            }

                                            $('input[type="submit"]').removeAttr('disabled');


                                        }
                                    });
                                }
                                
                                return false;
                                
                                 
                            });
                        });

                    </script>



                    <br />
                    <br />
                    <div id="d1">

                        <h1> User Info </h1>
                        <br />
                        <table id="tblUsers">
                            <thead>
                                <tr>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
<form name="delform" action="delete_user2.php" method="get" onsubmit="return delete_row();">
<input type="hidden" name="empid" id="empid" />
<input type="submit" name="submitdel" value="Delete" disabled>
</form>
<script>
					function delete_row() {
								var ans = confirm('Do you really want to delete?');
                                   // alert(ans);
                                if (ans) {
                                  return true;
                                }
                                return false;
                            }

                        </script>

                        <br />
                    </div>
                </div>

                <br class="clearfix" />
            </div>
            <!-- footer bigin -->

            <div id="footer">
                &copy; Reality_Solutions. All rights reserved.

                <br class="clearfix" />
            </div>
            <!-- footer end -->
        </div>
        </div>
    </body>
<!-- body closing tag-->
    </html>
