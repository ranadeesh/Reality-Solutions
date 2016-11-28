<?php

$usersarray = array();
$eid= $_GET['eid'];
 if($eid != ""){
$con=mysql_connect("localhost","root","");
 
mysql_select_db("realdb", $con);

$query="select * from users where emp_id = ".$eid ;


$res =mysql_query($query);

while($user=mysql_fetch_assoc($res)){
$usersarray[] =  $user;
}

//we send the array as JSON object
echo json_encode($usersarray);

}
?>