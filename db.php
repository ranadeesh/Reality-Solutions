
<?php

$host="localhost";
$uname="root";
$pass="";
$databasename="realdb";

$conn=mysql_connect($host,$uname,$pass);
$db=mysql_select_db($databasename);

$td = date("Y-m-d");
//$PHPSESSID=session_id();

?>