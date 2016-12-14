     <?php
// reading plot-id
	$aptmtid= $_GET["aptmtid"];
	
	include("db.php");
	 mysql_query("delete from appointments where id=$aptmtid");

 echo "<script>alert('success'); location.href='appointments.php';</script>";
 
 
   echo 	$pid;
	
 
?>
   