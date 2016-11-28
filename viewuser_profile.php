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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Bigbusiness by TEMPLATED</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script  src="jquery.js"></script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
		 
           <h1><a href="home.php">   
           <img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1> 
     
            
            </a></h1>
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
		
	 <p>
                Enter  Employee Id :
                <input type="text" id="eid" />
               
</p>
<script>
function del(n){
    
    alert(n);
}
</script>
<script>
$(document).ready(function(){
 
$("#eid").change(function(){
  
 var eid =  $("#eid").val();
 
//alert(eid);

if(eid!='')
 {

 var dataString = 'eid='+ eid;

 // AJAX Code To Submit Form.
 $.ajax({
 type: "GET",
 url: "edituser2.php",
 data: dataString,
 
 cache: false,
 
 success: function(result){
 //alert(result);
 var userdetails = JSON.parse(result);
  
  var n= userdetails[0].emp_id;
   var rows = "<tr>"
                       
                        + "<td>" +userdetails[0].emp_id + "</td>"
                        + "<td>" + userdetails[0].firstname + "</td>"
                        + "<td>" + userdetails[0].lastname + "</td>"
                        + "<td>" +userdetails[0].username + "</td>"
                          + "<td>" +userdetails[0].password + "</td>"
                        + "<td>" + userdetails[0].email + "</td>"
                        + "<td>" + userdetails[0].address + "</td>"
                       
                        + "<td>" + userdetails[0].gender + "</td>"
                        + "<td>" + userdetails[0].maritalstatus + "</td>"
                       + "<td>" + userdetails[0].DOB + "</td>" 
                     <!--   + "<td><a href='deluser3.php?n='"+ n+">delete</a>"+ "</td>"  -->
                        + "</tr>";
                     
                        $('#tblUsers tbody').append(rows);
  
    

 
 }
 });
 }
 return false;  
 });
  }); 
   
  </script>
		
		
		
			<br /><br />
			<div id="d1">
			<h1> User Details</h1>
			<br />
			<table id="tblUsers" border="1">            
     <thead>
        <tr>
            <th>EmpId</th>    
            <th>firstname</th>    
            <th>lastname</th>    
            <th>username</th> 
            <th>password</th>
            <th>email  </th>
            <th> address </th>
            <th> gender </th>
            <th> maritalstatus </th>
            <th>DOB  </th>
           <!--  <th>   </th>  -->
        </tr>   
     </thead> 
     <tbody>
            
     </tbody> 
     </table> 
  <br />
  	  </div>
		</div>
		
		<br class="clearfix" />
	</div>
  <div id="footer">
     &copy; Reality_Solutions. All rights reserved. 
    <br class="clearfix" />
  </div>  
</div>
</div>

</body>
</html>