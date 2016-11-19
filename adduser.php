 <!-- starting of the php session for add users -->
 
 <?php
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

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<!-- adding title to the page -->

<title>Add users | Admin </title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!-- adding style sheet to the page -->

<link rel="stylesheet" type="text/css" href="style.css" />
<script language="JavaScript">
<!-- Hide
var stm	
verify = function(form)
{
stm=0
for(i=0;i<11;i++)
{
if(document.forms [0].elements[i].value=="")
{
alert("Please fill in the "+document.forms[0].elements[i].name+" field");
document.forms [0].elements[i].focus();
return (false);
}



}
if (stm==0)
{
if (document.forms [0].elements[3].value==document.forms[0].elements[5].value)
return true;
else
{
alert("Please Check The PassWords!");
document.forms [0].elements[3].value=""
document.forms [0].elements[5].value=""
document.forms [0].elements[3].focus();
return (false);
}
 
return true;
document.forms [0].elements[0].focus();
}

}

function form_load(form)
{
document.forms [0].elements[0].focus();
}
-->
</script>		<!-- scripting language for loging in and adding the users to the site -->
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">		<!-- adding the logo to page -->
			<<h1><a href="home.php">   <img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1> 
     
		</div>
		<div id="slogan">
			<h3> <a href="logout.php">Logout</a></h3>
		</div>
	</div>
	<div id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li class="current_page_item"><a href="plots.php">Plots</a></li>
			<li><a href="#">Apartments</a></li>
			<li><a href="#">Appointments</a></li>
			<li><a href="#">Sales</a></li>
			<li><a href="#">Reports</a></li>
		 
		 
		</ul>
		<br class="clearfix" />
	</div>
	 
	<div id="page">
		<div id="content">
		<!-- php session for adding the users into database using the php services and code -->
		
			<?php
			include("db.php"); //including the database php 
			 
			echo " Welcome to Plots page <br> "; //prompting the user 
			
			if(isset($_POST['save'])) //if statement for post actions 
{
 $empid=$_POST['empid'];			//assining the empid object
 $username=$_POST['username'];		//assining the username onject
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
echo "<br>". $query;


     mysql_query($query);
    
 echo "<br> success";
	 		}
			
			?>
			<br /><br />
			<div id="d1">
			<h1>Add User </h1>
			<br />
			<form id="form1" method="post" action="#" OnSubmit="return verify(this.form)" > <!-- staritng of form -->
	        
	        <!-- starting of table -->
	        <table width="662">
              <tr> <!-- table rows-->
                  <td width="15%">Employee Id </td> <!-- td==table data-->
                  <td width="22%"><input type="text" name="empid" tabindex="0"/></td>
                  <td width="12%">&nbsp;</td>
                  <td width="25%">UserName</td>
                  <td width="26%"><label>
                    <input type="text" name="username" tabindex="6"/>
                  </label></td>
              </tr><!--closing of the table rows -->
              <!-- starting of the table row-->
              <tr>
               
                
                <td>FirstName</td>
				<td><input type="text" name="firstname"  /></td>
				<td>&nbsp;</td>
				<td>Password</td>
                <td><label>
                  <input type="text" name="passwd" />
                </label></td>
              </tr>
              <tr>
                 
                <td>LastName</td>
				<td><input type="text" name="lastname" tabindex="2"/></td>
				<td>&nbsp;</td>
				<td>confirm Password </td>
                <td><label>
                  <input type="text" name="cpasswd" tabindex="8"/>
                </label></td>
              </tr>
              <tr>
                <td>Email  </td>
                <td><input type="text" name="email"  tabindex="3"/></td>
                <td>&nbsp;</td>
                <td>DOB</td>
                <td><input type="text" name="dob" tabindex="9"/></td>
              </tr>
              <tr>
                <td>Gender</td>
            
                  <td>  <input  type="radio" name="gender" value="male" checked tabindex="4">
Male  
                 
                  <input type="radio"  name="gender" value="female"  />
Female </td>
                <td>&nbsp;</td>
                <td><label></label>
                  <label>Address</label></td>
                <td><label>
                  <textarea name="address" tabindex="10"></textarea>
                </label></td>
              </tr>
              <tr>
                <td>Marital status</td>
                <td><select name="maritalstatus" tabindex="5">
                  <option>single</option>
                  <option>married</option>
                </select></td>
                <td>&nbsp;</td>
                <td><label></label></td>
                <td><label>
                  <input type="submit" name="save" value="Save" />
                  <input type="reset" name="cancel" value="Cancel" />
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table> <!--closing of the table -->

  </form> 	<!-- closing of the forms -->
  <br />
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