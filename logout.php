 <?php
 session_start();
 ?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Logout</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">
  <div id="header">
    <div id="logo">
     <h1><a href="home.php">   <img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1> 
     
    </div>
    <div id="slogan">
   <!--   <h3> <a href="#">Logout</a></h3> -->
    </div>
  </div>
  <div id="page">
    <div id="content">
      <div class="box">
	  
	      
		<?php
 
unset($_SESSION['user']);
session_destroy();
echo "<h2>successfully logged out</h2>";

echo "<p><a href = 'index.php' > Home </a> </p>";
?>
	
        
        
      </div>
      <div class="box" id="content-box1"> </div>
      <div class="box" id="content-box2"> </div>
      <br class="clearfix" />
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