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
<!-- Header tag starts -->
    <head>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Admin | Add User</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script language="JavaScript">
            <!-- Hide
            var stm
            verify = function(form) {
                stm = 0
                for (i = 0; i < 11; i++) {
                    if (document.forms[0].elements[i].value == "") {
                        alert("Please fill in the " + document.forms[0].elements[i].name + " field");
                        document.forms[0].elements[i].focus();
                        return (false);
                    }



                }
                if (stm == 0) {
                    if (document.forms[0].elements[3].value == document.forms[0].elements[5].value)
                        return true;
                    else {
                        alert("Please Check The PassWords!");
                        document.forms[0].elements[3].value = ""
                        document.forms[0].elements[5].value = ""
                        document.forms[0].elements[3].focus();
                        return (false);
                    }

                    return true;
                    document.forms[0].elements[0].focus();
                }

            }

            function form_load(form) {
                document.forms[0].elements[0].focus();
            }
            -->

        </script> <!--Closing of the script tag-->
    </head>
	<!-- header tag closes -->

	<!-- body tag starts -->
    <body>
        <div id="wrapper">
            <div id="header">
                <div id="logo">
                    <h1>
            <a href="admin_home.php"> <img src="images/Reality_Solutions.png" height="150" width="200" /> </a>
                        </h1>

                </div>
                <div id="slogan">
                    <h3> <a href="logout.php">Logout</a></h3>
                </div>
            </div>
            <div id="menu">
                <ul>
                
            <li><a href="index.php">Home</a></li>
			<li><a href="view_users.php">View Users</a></li>
			<li  class="first current_page_item"><a href="adduser.php">Add User</a></li>
			<li><a href="edituser.php">Edit User</a></li>
			<li><a href="delete_user.php">Delete User</a></li>
		 	<li><a href="view_user.php">View User</a></li>
		 	<li><a href="view_complaints.php">Notifications</a></li>

                </ul>
                <br class="clearfix" />
            </div>

            <div id="page">
                <div id="content">
    <?php
			include("db.php");
			 
				
			if(isset($_POST['save']))
{
 $empid=$_POST['empid'];
 $username=$_POST['username'];
 $password=$_POST['passwd'];
  $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $email =$_POST['email'];
  $gender=$_POST['gender'];
  $maritalstatus = $_POST['maritalstatus'];
    $dob=$_POST['dob'];
	
 $address=$_POST['address'];
		$usertype ="employee";	
			
//	"insert into plots values('','$plot_type','$address','$monthly_rent','$lease_availability','$forsale')");

$query=	"INSERT INTO users (emp_id ,firstname, lastname, username, password, usertype, email, gender, maritalstatus, DOB, address) values( '$empid' , '$firstname','$lastname'   ,'$username' ,  '$password' ,  '$usertype' ,    '$email' ,  '$gender' ,  '$maritalstatus' ,  '$dob' ,  '$address' )";


//echo "<br>". $query;


     mysql_query($query);
    
 echo "<br> success";
	 		}
			
			?>
                        <br />
                        <br />
					 
                        <div id="d1">
                            <h1>Add User </h1>
                            <br />
								<!-- Add user form starts-->
                            <form id="form1" method="post" action="#" OnSubmit="return verify(this.form)">
                                <table width="662">
                                    <tr>
                                        <td width="15%">Employee Id </td>
                                        <td width="22%">
                                            <input type="text" name="empid" tabindex="0" />
                                        </td>
                                        <td width="12%">&nbsp;</td>
                                        <td width="25%">UserName</td>
                                        <td width="26%">
                                            <label>
                                                <input type="text" name="username" tabindex="6" />
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>


                                        <td>FirstName</td>
                                        <td>
                                            <input type="text" name="firstname" />
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>Password</td>
                                        <td>
                                            <label>
                                                <input type="password" name="passwd" />
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>LastName</td>
                                        <td>
                                            <input type="text" name="lastname" tabindex="2" />
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>confirm Password </td>
                                        <td>
                                            <label>
                                                <input type="password" name="cpasswd" tabindex="8" />
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email </td>
                                        <td>
                                            <input type="text" name="email" tabindex="3" />
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>DOB</td>
                                        <td>
                                            <input type="date" name="dob" tabindex="9" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>

                                        <td>
                                            <input type="radio" name="gender" value="male" checked tabindex="4"> Male

                                            <input type="radio" name="gender" value="female" /> Female </td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <label></label>
                                            <label>Address</label>
                                        </td>
                                        <td>
                                            <label>
                                                <textarea name="address" tabindex="10"></textarea>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Marital status</td>
                                        <td>
                                            <select name="maritalstatus" tabindex="5">
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
                                                <input type="submit" name="save" value="Save" />
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
							<!--Add user form closes--> 
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

    </html>
