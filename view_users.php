<?php
 //session start
ob_start();
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
		
						
			<li><a href="admin_home.php">Home</a></li>
			<li class="first current_page_item"><a href="view_users.php">View Users</a></li>
			<li><a href="adduser.php">Add User</a></li>
			<li><a href="edituser.php">Edit User</a></li>
			<li><a href="delete_user.php">Delete User</a></li>
		 	<li><a href="view_user.php">View User</a></li>
	 		
  <li><a href="view_complaints.php">Notifications</a></li>
		 
		</ul>
		<br class="clearfix" />
	</div>
	 
	<div id="page">
		 
		 <br /><br /> 

<?php
include("db.php");

$select =mysql_query("SELECT * FROM users");
?>

<table align="center" >
<tr>
<th>Emp Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>User Name</th>
<th>User Type</th>
<th>Email Id</th>
<th>Gender</th>
<th>Matrial Status</th>
<!--<th>DATE OF BIRTH</th>  -->
 

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
	 <!--  <td><?php echo $row['DOB']; ?></td> -->

 </tr>
 <?php
}
?>


</table>
<br />

 
	<br /><br /><br /><br /><br />	
	 
		
		
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
<!-- Body tag closes -->
</html>