<?php
// reading plot-id
	$pid= $_GET["pid"];
	
	include("db.php");
	 mysql_query("select from plots where id='$pid'");
 
   echo 	$pid;
	
 
?>
