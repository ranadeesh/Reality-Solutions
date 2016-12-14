     <?php
// reading plot-id
	$aptid= $_GET["aptid"];
	
	include("db.php");
	 mysql_query("delete from appartments where id=$aptid");
	   ;
 echo "<script>alert('success'); location.href='apartments.php';</script>";
 
 
   echo 	$pid;
	
 
?>
   