<?php
// session start
 
 session_start();
include "db.php";
require_once('paypal.class.php'); 
require_once('includes/functions.php');
require_once('includes/checkout_functions.php');
$order_summery=array();

$check=new checkout_functions();
// include the class file
$p = new paypal_class; // initiate an instance
$p->paypal_url = "https://www.sandbox.paypal.com/cgi-bin/webscr"; //test url

$this_script = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];


//if(isset($_POST['submit'])){
 $or=$_SESSION['order_id'];
 $sql="select * from reports where purchase_order=". $or;
 $res = mysql_query( $sql)  or die(mysql_error());


$row=mysql_fetch_assoc($res);
$status=$row['payment_done'];
 
 
	$date= $row['sold_date'];
	$name=  $row['sold_to'];
	
//	$time=  $_POST['time'];
	$amount = $row['advance_amt'];
 
	echo 'order id in paypal'.$or;
 
	$sessionID = $row['session'];
	
//	$email=$_POST['email'];	
  array_push($order_summery,$date,$name,$amount,$or);
	$_SESSION['order_summery']=$order_summery;
 

// if no action variable, set 'process' as default action
if (empty($_GET['action'])) $_GET['action'] = 'process';

switch ($_GET['action']) {
	case 'process': // Process and order... 
 
    $or=$_SESSION['order_id'];
 
	$p->add_field('business',"rana2deesh@gmail.com" );

	$p->add_field('return', $this_script.'?action=success&type='.$or);
	$p->add_field('cancel_return', $this_script.'?action=cancel&type='.$or);
	$p->add_field('notify_url', $this_script.'?action=ipn');
	$p->add_field('item_name', 'Plot purchase Online'); // 'ITEM NAME'
	
	
	//$p->add_field('amount', '0.02'); // 'ITEM AMOUNT'  
	
	$p->add_field('amount', $amount);	
	$p->add_field('currency_code', 'USD');//CURRENCY VALUE USD/EUR…
	$p->submit_paypal_post(); // submit the fields to paypal
	break;
	
	case 'success': // successful order...
	  //  echo "we sent email...";
		echo "success    <br>". $_GET['type'];

		
		//updating order status to `completed` on success
	$updateCompleted = $check->updateOrderStatus($or = $_GET['type'], $status  = 'Processed');
		if($updateCompleted){
			echo "<script>alert('Thank you for your order!'); location.href='index.php';</script>";
//mail code
 	foreach ($_POST as $key => $value) {
		echo "$key: $value<br>";
	}
	echo "</body></html>";  
include("ordermail.php");  

//mail code end
	 }
	  
	 
		break;
		
	case 'cancel': // Canceled Order...
	 
     //echo" canceld...";
    $updateCompleted = $check->updateOrderStatus($orderID = $_GET['type'], $status = 'Cancelled');
    		if($updateCompleted){
			echo "<script>alert('Your Plot/Apt Booking is Cancelled!'); location.href='index.php';</script>";
		
		}

		
		
		break;
	case 'ipn': // For IPN validation...
	if ($p->validate_ipn()) {
		$subject = 'Instant Payment Notification - Recieved Payment';
		$to =  'rana2deesh@gmail.com ';
		$body="An instant payment notification was successfully recieved\n";
		$body .= "from ".$p->ipn_data['payer_email']." on ".date('m/d/Y');
		$body .= "\n\nDetails:\n";
		foreach ($p->ipn_data as $key => $value) {
			$body .= "\n$key: $value";
		}
		@mail($to, $subject, $body);
	}
	break;
	default:
			$updatePending = $check->updateOrderStatus($orderID = $orderID, $status  = 'Cancelled');
}

	
?>