<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "realdb");
//connet database
class DB_Class
{
	function __construct()
	{
		$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Oops connection error -> ".mysql_error());
		mysql_select_db(DB_DATABASE, $connect);
	}
}
?>