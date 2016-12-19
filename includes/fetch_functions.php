<?php

$filepath = realpath (dirname(__FILE__));

require_once("connect.php");
require_once("db0df.php");
 
class Fetch_functions

{

	function __construct() 

	{

        $db = new DB_Class();

	}

	function query($sql)

	{

		return mysql_query($sql);

	}

	function num_rows($sql)

	{

		return mysql_num_rows($sql);

	}
	function insertId(){
		return mysql_insert_id();
	}
	function result($sql)

	{

		return mysql_fetch_array($sql);

	}

	function assoc($sql)

	{

		return mysql_fetch_assoc($sql);

	}

	function row($sql)

	{

		return mysql_fetch_row($sql);

	}

 

}

 



?>