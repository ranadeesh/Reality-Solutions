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
$gender=$_POST['gender'];
$usertype ="employee";	
			
 
$query=	"update  users  set firstname =  '$firstname', lastname = '$lastname', username ='$username' , password ='$password'  , usertype = '$usertype', email = '$email', gender ='$gender' , maritalstatus ='$maritalstatus' , DOB ='$dob' , address = '$address' where emp_id =  '$empid' ";


//echo "<br>". $query;


     mysql_query($query);
    
 echo "<br> success";
  echo "<script>alert('success'); location.href='edituser.php';</script>";
	 		}
			
			?>