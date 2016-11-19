 
 <!--Php session started -->
 <?php
 session_start(); 
 ?>


<!-- Html coding starts-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Index | Reality Solutions </title> <!--Title Name--> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />			<!-- Connecting style sheet to the html file-->
</head>

<body>		<!--Body tag opens -->
<!-- Dividing the html page into diffrent peices-->
<div id="wrapper">
  <div id="header">
    <div id="logo">
     <h1><a href="home.php">   <img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1> 
     
    </div>
    <div id="slogan">
	<!-- php session for showing who is loged in -->
    	<?php 
		 if(isset($_SESSION['user'])){  ?> 
			<h3> <a href="logout.php">Logout</a></h3>
		 
			<?php }   ?>
   
    </div>
  </div>
  <div id="page">
    <div id="content">
      <div class="box">
        <h2>About Reality Solutions </h2>
        <!-- a little information about the company and the site-->
		<p align="justify"> This is <strong>Reality Solutions </strong>, a free and fully standards-compliant CSS website for customer and employee to interact with each other efficiently</a>.</p> 
		<p align="justify"> This is <i>Reality Solutions </i>, a free and fully standards-compliant CSS website </a>.</p> 
      </div>
      <div class="box" id="content-box1"> </div>
      <div class="box" id="content-box2"> </div>
      <br class="clearfix" />
    </div>
    <div id="sidebar">
      <div class="box">


<!-- php code for loging in  and checking user name and password including 
user type -->	  
<?php
 
if(isset($_POST["submit"])){
$username=$_POST["username"];
$password=$_POST["password"];
$usertype=$_POST["usertype"];
 
 
include("db.php");
 
if ($conn) {
 

$query="select * from users where username='$username' and password='$password' and usertype='$usertype' " ;		


$res=mysql_query($query,$conn);

$num_rows = mysql_num_rows($res);

if ($num_rows > 0) {

$_SESSION["user"]=$username;
header("Location:home.php");

}
else
{
echo "<script>alert('Invalid Login')</script>";

}
mysql_close($conn);
}
}
?>
        <h3>Login Here</h3>
        	<?php 
		 if(isset($_SESSION['user'])){    
			echo "You are logged in as <b>".$_SESSION['user']."</b>";
			 }   
            ?>
			
			<!-- form tags to creat a small form and perform actions on it -->
		<form name="login" action="#" method="post">
        <p>Username:
		<!-- user name to be entered in here -->
          <input type="text" name="username" id="user" />
          <br />
		  <!-- Password to be entered in here -->
          Password:
          <input type="password" name="password" id="pwd" />
          <br />
		  <!-- User Type to be entered in here -->
          UserType:
		  <br/>
          <select name="usertype" ">
           <option>Admin</option>
            <option>Employee</option>
          </select>
          <br />
          <input name="submit" type="submit" id="submit" value="Submit" />
        </p>
		</form> 	<!-- Closing up the form tag -->
      </div>
      <div class="box">
        <div class="date-list"> </div>
      </div>
    </div>
    <br class="clearfix" />
  </div>
    <div id="footer">
     &copy; Reality Solutions. All rights reserved. 
     <br class="clearfix" />
  </div>  
</div>
 </body>  
</html>