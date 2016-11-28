<?php
 //session start
 session_start();
 ?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
<!-- head tag starts-->
    <head>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Login | Reality Solutions</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
<!-- Head tag ends -->
<!--body tag stars -->
    <body>
        <div id="wrapper">
            <div id="header">
                <div id="logo">
                    <h1><a href="home.php">   <img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1>

                </div>
                <div id="slogan">
				 <!--  session logout link  -->
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
                        <p align="justify"> The Reality solutions is a website where the users can able to login and see the list of properties they have for the customers.</p>
                        <p align="justify"> This is the company where an user can able to share the information about the properties with customers</p>
                    </div>
                    
                </div>
                <div id="sidebar">
                    <div class="box">

                        <?php

 
if(isset($_POST["submit"])){
$username=$_POST["username"];
$password=$_POST["password"];
$usertype=$_POST["usertype"];
 
 
include("db.php");
 
if ($conn) {
 

$query="select * from users where username='$username' and password='$password' and usertype='$usertype' " ;

//echo $query;

$res=mysql_query($query,$conn);

$num_rows = mysql_num_rows($res);

if ($num_rows > 0) {
 
$_SESSION["user"]=$username;
 
if($usertype == 'admin')

header("Location:admin_home.php");
else

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
                                <form name="login" action="#" method="post">
                                    <p>Username:
                                        <input type="text" name="username" id="user" />
                                        <br /> Password:
                                        <input type="password" name="password" id="pwd" />
                                        <br /> UserType:
                                        <select name="usertype">
            <option>admin</option>
            <option>employee</option>
          </select>
          <br />
          <input name="submit" type="submit" id="submit" value="Submit" />
        </p>
		</form>
      </div>
       <div class="box">
        <div class="date-list"> 
		<h4>Plosts for Sale </h4>
		<img src="images/apt1.jpg" height="200" width="200"/> 
		</div>
		
       
    </div>
    <br class="clearfix" />
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
	<!--Body tag ends--> 

    </html>
