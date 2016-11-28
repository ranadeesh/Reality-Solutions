 <?php
 // php session starts
 session_start();
if(isset($_SESSION['user'])){
 $user = $_SESSION['user'];
 }
else
 {
 header("Location:index.php");
 }
 ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Admin | View User</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script  src="jquery.js"></script>
<script src="modify_records.js"></script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
  <h1><a href="admin_home.php">   
  <img src="images/Reality_Solutions.png" height="150" width="200"/> 
  </a>
  </h1>
     
	  </div>
		<div id="slogan">
			<h3> <a href="logout.php">Logout</a></h3>
		</div>
	</div>
	<div id="menu">
		<ul>
		
						
			<li><a href="index.php">Home</a></li>
			<li class="first current_page_item"><a href="viewusers.php">View Users</a></li>
			<li><a href="adduser.php">Add User</a></li>
			<li><a href="edituser.php">Edit User</a></li>
			<li><a href="delete_user.php">Delete User</a></li>
		 	<li><a href="view_user.php">View User</a></li>
	 		<li><a href="notifications.php">Notifications</a></li>
		 
		</ul>
		<br class="clearfix" />
	</div>
	 
	<div id="page">
		<div id="content">
		 <br /><br /> 

<?php
include("db.php");

$select =mysql_query("SELECT * FROM users");
?>

<table align="center" border="1" >
<tr>
<th>EMP_ID</th>
<th>FIRST_NAME</th>
<th>LAST_NAMENAME</th>
<th>USER_NAME</th>
<th>USER_TYPE</th>
<th>EMAIL</th>
<th>GENDER</th>
<th>MARITAl STATUS</th>
<th>DATE_OF_BIRTH</th>
 

</tr>
<?php
while ($row=mysql_fetch_array($select)) 
{
 ?>
 <tr>
 <td><?php echo $row['emp_id']; ?></td>
  <td><?php echo $row['firstname']; ?></td>
  <td><?php echo $row['lastname']; ?></td>
   <td><?php echo $row['username']; ?></td>
     <td><?php echo $row['usertype']; ?></td>
    <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['gender']; ?></td>
	 <td><?php echo $row['maritalstatus']; ?></td>
	   <td><?php echo $row['DOB']; ?></td>

 </tr>
 <?php
}
?>


</table>
<br />

</div>
	<br /><br /><br /><br /><br />	
	 
		
		
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
<!-- Body tag closes -->
</html>