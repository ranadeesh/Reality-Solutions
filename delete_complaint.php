     <?php
// reading plot-id
	$cid= $_GET["cid"];
	
	include("db.php");
	 mysql_query("delete from complaints where id=$cid");
	   
 echo "<script>alert('success'); location.href='view_complaints.php';</script>";
 
 
  // echo 	$cid;
	
 
?>
   