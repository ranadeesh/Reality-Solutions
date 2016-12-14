<?php

/*********************************************************

*                 CHECKOUT FUNCTIONS 

*********************************************************/

require_once("functions.php");

class checkout_functions{

	function updateOrderStatus($orderID, $status){

		$fetch = new Fetch_functions();

		$updateOrderstatus = $fetch->query("update reports set payment_done='$status' where purchase_order='$orderID'");

		if($updateOrderstatus){

			return true;

		}else{

			return false;

		}

	}
	}
	
?>