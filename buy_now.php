<?php
 //session starts

ob_start();
session_start();
?>
<?php
  if(isset($_SESSION['user'])){
 $user = $_SESSION['user'];
 }
else
 {
 echo '<script> location.href="index.php"</script>';
 }
 ?>
<!DOCTYPE html>

<html>
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Buy Property</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />

<script>
// calculating balance amount in a form

function bal_due(){

  var total = document.getElementById("totalamt").value;
  var adv= document.getElementById("advamt").value;

 document.getElementById("balamt").value=(total-adv);
}

</script>


</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo"> 
        
         <!-- adding logo -->
	
			<h1><a href="home.php"><img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1>
		
		</div>
		<div id="slogan">

		<h3> <a href="logout.php">Logout</a></h3>
		</div>
	</div>
	 <!-- adding menu -->
	<div id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="view_plots.php">Plots</a></li>
			<li><a href="apartments.php">Apartments</a></li>
			<li><a href="appointments.php">Appointments</a></li>
			<li><a href="sales.php">Sales</a></li>
			<li><a href="reports.php">Reports</a></li>
			<li><a href="complaint.php">Complaints</a></li>
		</ul>
		<br class="clearfix" />
	</div>
 
	<div id="page">
		 
			<div class="box">
			
			<?php
			include("db.php");
			require_once('includes/functions.php');
			
				

//$pid= $_POST["pid"];			
$PHPSESSID=session_id();
 
 if(isset($_POST['submitorder'])){
 
   /* if(!isset($_POST['o_name']) || $_POST['o_name'] == '' ) {
$err= "There is problem! try again later";
  header('Location:index.php');
     exit();
  }   */

//clean all POST vars first

$purchase_order=  autono();
$_SESSION['order_id'] = $purchase_order;

$order_name = mysql_escape_string($_POST['o_name']);
$contact=mysql_escape_string($_POST['contact']);
$order_address = mysql_escape_string($_POST['address']);
$total_amt = mysql_escape_string($_POST['totalamt']);
$adv_amt = mysql_escape_string($_POST['advamt']);
$bal_amt = mysql_escape_string($_POST['balamt']);
$order_date = mysql_escape_string($_POST['o_date']);
$order_status = mysql_escape_string($_POST['status']);

$property_type = mysql_escape_string($_POST['property_type']);
$property_no = mysql_escape_string($_POST['property_no']);
 
//Now, insert data


$addorder="INSERT INTO sales  SET
property_type='$property_type',
property_no=$property_no,

sale_value=$total_amt,
date_of_sale='$order_date',
sold='yes',
advance=$adv_amt,
balanceamout=$bal_amt,
installment=0,
contactinfo='$contact',
sale_order='$purchase_order'";


//echo $addorder."<br />";
$result =mysql_query($addorder);
 
$addorder2="INSERT INTO reports SET purchase_order='$purchase_order',
 solditem_type='$property_type', 
 address='$order_address',
  sold_to='$order_name', 
  
sold_date='$order_date',
  sold_amount=$total_amt, 
  advance_amt=$adv_amt, 

  payment_remaining=$bal_amt,
    payment_done='$order_status',
  session='$PHPSESSID'";  

$result1 =mysql_query($addorder2); 







// echo "<br>".$addorder;
if(!$result1  ){
$msg=mysql_error();
}
else{
//$msg="Your order has been processed";
header("Location:paypal.php");
 }

}

?>

<h1>Reality Solutions - Order Checkout </h1><br /><br /><br />
		
<table width="100%" border="0">
  <tr>
    <td colspan="2"></td>
  </tr>
  <?php if(!isset($msg)) {  ?>
   <form action="#" method="post">
   <input name="status" type="hidden" size="40" value="Pending">
  <input name="property_type" type="hidden" size="40" value= <?php echo $_POST['property_type']; ?> >
  <input name="property_no" type="hidden" size="40" value= <?php echo $_POST['property_no']; ?> >
  
  <tr>
    <td width="43%">Name</td>
    <td width="57%"><label>
      <input name="o_name" type="text" size="40" required />
    </label></td>
  </tr>
    <tr>
    <td valign="top">Contact</td>
    <td><label>
      <input name="contact" type="text" size="40" required />
    </label></td>
  </tr>
  <tr>
    <td valign="top">Address</td>
    <td><label>
      <textarea cols="35" name="address" required></textarea>
    </label></td>
  </tr>
  <tr>
    <td>Total Amount</td>
    <td><label>
      <input name="totalamt" id="totalamt" type="text" size="40" value="<?php echo $_POST['total']; ?>"/>
    </label></td>
  </tr>
  <tr>
    <td>Advanced Amount </td>
    <td><label>
    
      <input name="advamt" id="advamt" type="text" size="40" onBlur="bal_due();"/>
    </label></td>
  </tr>
  <tr>
    <td>Balance Amount </td>
    <td><label>
     
      <input name="balamt" id="balamt" type="text" size="40"   />
    </label></td>
  </tr>
  <tr>
    <td>Date</td>
    <td><label>
      <input name="o_date" type="text" size="40" value="<?php echo $td; ?>" >
    </label></td>  <td> </td>
  </tr>

  <tr>
  
  <td> </td>
    <td><label>
      <input type="submit" name="submitorder" value="Send Order" />
    </label></td>
  </tr>
   </form>
   <?php
   }else{
      ?>
      <tr>
      <td>
      <?php echo $msg; ?>
      </td>
      </tr>
<?php } ?>
</table>
			</div>
	 
			<br class="clearfix" />
	 
		 
		<br class="clearfix" />
		<br/><br/><br/><br/><br/><br/>
	</div>  
    
<!-- footer bigin -->	
	
  <div id="footer">
     &copy; Reality Solutions. All rights reserved. 
     
    <br class="clearfix" />
     </div>  
    <!-- footer end -->
</div>

</body>
</html>