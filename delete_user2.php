     <?php
     
//session starts 
     session_start();
//	if(isset($_POST["submitdel"])){
	$empid= $_GET["empid"];
	
	include("db.php");
	 mysql_query("delete from users where emp_id=$empid");
     echo "<script>alert('success'); location.href='delete_user.php';</script>";
 
?>
   