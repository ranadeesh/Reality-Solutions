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
                
            <li><a href="admin_home.php">Home</a></li>
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
        
        
          $res1=mysql_query("select emp_id from users where emp_id=$empid");
         // echo "select emp_id from users where emp_id=$empid";
			  $re1=mysql_num_rows($res1);
			  if($re1==1)
			  {
			  echo "Emp-id is already existed";
			  }
			
			else{

$query=	"INSERT INTO users (emp_id ,firstname, lastname, username, password, usertype, email, gender, maritalstatus, DOB, address) values( '$empid' , '$firstname','$lastname'   ,'$username' ,  '$password' ,  '$usertype' ,    '$email' ,  '$gender' ,  '$maritalstatus' ,  '$dob' ,  '$address' )";


//echo "<br>". $query;


     	$res=mysql_query($query);
     	if($res)
			{
			echo "<h1>Successfully Created account</h1>";
			}
			else
			{
			die(mysql_error());
			}
			}
  		
			}
			?>
                        <br />
                        <br />
					 
                        <div id="d1">
                            <h1>Add User </h1>
                            <br />
	<!-- Add user form starts-->
<form id="form1" method="post" action="#" OnSubmit="return verify(this.form)">
                                 
<table width="200">
  <tr>
    <td width="16%">Employee Id</td>
    <td width="21%"><label>
      <input type="text" name="empid" />
    </label></td>
    <td width="15%">&nbsp;</td>
    <td width="19%">User Name</td>
    <td width="29%"><label>
      <input type="text" name="username" />
    </label></td>
  </tr>
  <tr>
    <td height="36">First Name</td>
    <td><label>
      <input type="text" name="firstname" />
    </label></td>
    <td>&nbsp;</td>
    <td> Password</td>
    <td><label>
      <input type="password" name="passwd" />
    </label></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><label>
      <input type="text" name="lastname" />
    </label></td>
    <td>&nbsp;</td>
    <td>Confirm Password </td>
    <td><label>
      <input type="password" name="cpasswd" />
    </label></td>
  </tr>
    <tr>
    <td>Email</td>
    <td><label>
      <input type="text" name="email" />
    </label></td>
    <td>&nbsp;</td>
    <td>DOB</td>
    <td><label>
      <input type="date" name="dob" />
    </label></td>
  </tr>
    <tr>
    <td>Gender</td>
    <td><label>
      <input name="gender" type="radio" value="male" checked />
      Male
      <input name="gender" type="radio" value="female" />
    Female</label></td>
    <td>&nbsp;</td>
    <td><label>Address</label></td>
    <td><label>
       <textarea name="address"></textarea>
    </label></td>
  </tr>
    <tr>
    <td>Marital Status </td>
    <td><label>
      <select name="maritalstatus"  >
		<option value="single">Single</option>
		<option value="married">Married</option>
	</select>  
    </label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="save" value="Save" />
      <input type="reset" name="cancel" value="Cancel" /></td>
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
