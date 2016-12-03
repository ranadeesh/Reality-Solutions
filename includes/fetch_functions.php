<?php

$filepath = realpath (dirname(__FILE__));

require_once("connect.php");
require_once("db0df.php");
 
class Fetch_functions

{

	public function __construct() 

	{

        $db = new DB_Class();

	}

	public function query($sql)

	{

		return mysql_query($sql);

	}

	public function num_rows($sql)

	{

		return mysql_num_rows($sql);

	}
	public function insertId(){
		return mysql_insert_id();
	}
	public function result($sql)

	{

		return mysql_fetch_array($sql);

	}

	public function assoc($sql)

	{

		return mysql_fetch_assoc($sql);

	}

	public function row($sql)

	{

		return mysql_fetch_row($sql);

	}

 

}

 



?>