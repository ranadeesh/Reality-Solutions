<?php
//Session starts 

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
<!-- Open the header tag -->
    <head>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Admin | Edit User</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="jquery.js"></script>

        <style type="text/css">
            #d1 {
                display: none;
            }

        </style>
    </head>
<!-- Close of header tag-->
	<!-- Open the body tag -->
    <body>
        <div id="wrapper">
            <div id="header">
                <div id="logo">

                    <h1> <h1><a href="admin_home.php"> 
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
                    <ul>
            <li><a href="admin_home.php">Home</a></li>
			<li><a href="view_users.php">View Users</a></li>
			<li><a href="adduser.php">Add User</a></li>
			<li class="first current_page_item"><a href="edituser.php">Edit User</a></li>
			<li><a href="delete_user.php">Delete User</a></li>
				<li><a href="view_user.php">View User</a></li>
					<li><a href="view_complaints.php">Notifications</a></li>
                    </ul>

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
                                            //alert(result);
                                            $("#d1").show(1000);
                                            var userdetails = JSON.parse(result);
                                            $("#empid").val(userdetails[0].emp_id);
                                            $("#firstname").val(userdetails[0].firstname);
                                            $("#lastname").val(userdetails[0].lastname);
                                            //alert(userdetails[0].username);
                                            $("#username").val(userdetails[0].username);
                                            $("#email").val(userdetails[0].email);
                                            $("#address").val(userdetails[0].address);

                                            $("#passwd").val(userdetails[0].password);

                                            var gender = userdetails[0].gender;
                                            //alert(gender);
                                            if (gender == "male")
                                                $('input:radio[name="gender"][value="male"]').attr('checked', true);
                                            else
                                                $('input:radio[name="gender"][value="female"]').attr('checked', true);

                                            $("#maritalstatus").val(userdetails[0].maritalstatus);
                                            $("#dob").val(userdetails[0].DOB);



                                        }

                                    });
                                }
                                return false;
                            });
                        });

                    </script>
                    <script>
                        function chkpwds() {
                            var p = document.getElementById("passwd").value();
                            var cp = document.getElementById("cpasswd").value();

                            alert(p + " " + cp);
                            if (p != cp) {

                                alert("Please Check The PassWords!");
                                document.getElementById("passwd").value = "";
                                document.getElementById("cpasswd").value = "";
                                document.getElementById("passwd").value.focus();
                                return (false);
                            }

                        }

                    </script>



                    <br />
                    <br />
                    <div id="d1">
					<!-- edit user form appears when you give employee id -->
                        <h1>Edit User </h1>
                        <br />
                        <form id="form1" method="post" action="update.php" onsubmit="chkpwds()">
                            <input type="hidden" name="empid" id="empid" />
                            <table width="662">

                                <tr>
                                <td>FirstName</td>
                                    <td>
                                        <input type="text" name="firstname" id="firstname" />
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>UserName</td>
                                    <td>
                                        <label>
                                            <input type="text" name="username" id="username" />
                                        </label>
                                    </td>
                                </tr>
                                <tr>

                                    <td>LastName</td>
                                    <td>
                                        <input type="text" name="lastname" id="lastname" />
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>Password </td>
                                    <td>
                                        <label>
                                            <input type="password" name="passwd" id="casswd" />
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email </td>
                                    <td>
                                        <input type="text" name="email" id="email" />
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>DOB</td>
                                    <td>
                                        <input type="text" name="dob" id="dob" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>

                                    <td>
                                        <input type="radio" name="gender" value="male" "checked"> Male

                                        <input type="radio" name="gender" value="female" /> Female </td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <label></label>
                                        <label>Address</label>
                                    </td>
                                    <td>
                                        <label>
                                            <textarea name="address" id="address"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Marital status</td>
                                    <td>
                                        <select name="maritalstatus" id="maritalstatus">
                                            <option>single</option>
                                            <option>married</option>
                                        </select>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <label></label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="submit" name="save" value="Save" onclick="return chkpwds()" />
                                            <input type="reset" name="cancel" value="Cancel" />
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </table>

                        </form>
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
<!--Close of body tag -->
    </html>
