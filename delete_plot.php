     <?php
// reading plot-id
	$pid= $_GET["pid"];
	
	include("db.php");
	 mysql_query("delete from plots where id='$pid'");
	   ;
 echo "<script>alert('success'); location.href='view_plots.php';</script>";
 
 
   echo 	$pid;
	
 
?>
   