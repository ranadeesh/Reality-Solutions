<?php

$db = mysql_connect("localhost","root","") or die("Failed to open connection to MySQL server.");
mysql_select_db("realdb") or die("Unable to select database");
$td = date("Y-m-d");
//$PHPSESSID=session_id();
?>