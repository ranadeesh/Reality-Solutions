 <?php
 //session starts
 session_start();
  if(isset($_SESSION['user'])){
 $user = $_SESSION['user'];
 }
else
 {
 header("Location:index.php");
 }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Bigbusiness by TEMPLATED</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">  <!-- adding logo -->
	
			<h1><a href="home.php"><img src="images/Reality_Solutions.png" height="150" width="200"/> </a></h1>
		
		</div>
		<div id="slogan">

		<h3> <a href="logout.php">Logout</a></h3>
		</div>
	</div>
	<div id="menu">
		<ul>
			<li class="first current_page_item"><a href="index.php">Home</a></li>
			<li><a href="view_plots.php">Plots</a></li>
			<li><a href="apartments.php">Apartments</a></li>
			<li><a href="appointments.php">Appointments</a></li>
			<li><a href="sales.php">Sales</a></li>
			<li><a href="reports.php">Reports</a></li>
		</ul>
		<br class="clearfix" />
	</div>
 
	<div id="page">
		<div id="content">
			<div class="box">
			
			<?php
			include("db.php");
			require_once('includes/functions.php');
			
				$pid= $_POST["pid"];

			
$PHPSESSID=session_id();
if(isset($_POST['submit'])){
 
 /*  if(!isset($_POST['o_name']) || $_POST['o_name'] == '' ) {
$err= "There is problem! try again later";
  header('Location:index.php');
    // exit();
  } */

//clean all POST vars first

$purchase_order=  autono();
$_SESSION['order_id'] = $purchase_order;
$order_name = mysql_escape_string($_POST['o_name']);
$order_address = mysql_escape_string($_POST['address']);
$order_total = mysql_escape_string($_POST['total']);
$order_shipcost = mysql_escape_string($_POST['shipcost']);
$order_date = mysql_escape_string($_POST['o_date']);
$order_status = mysql_escape_string($_POST['status']);


//Now, insert data
$addorder="INSERT INTO orders SET purchase_order=". "'$purchase_order'". ",order_name='".$order_name."', order_address='".$order_address."',";
$addorder .="order_total='".$order_total."', order_date='".$order_date."', order_status='".$order_status."', session='".$PHPSESSID."', shipping_cost='".$order_shipcost."'";

$result =mysql_query($addorder);

 echo "<br>".$addorder;
if(!$result){
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
  <?php if(!isset($msg)) {?>
   <form action="buy_now.php" method="post">
  <tr>
    <td width="16%">Name</td>
    <td width="84%"><label>
      <input name="o_name" type="text" size="40" />
    </label></td>
  </tr>
  <tr>
    <td valign="top">Address</td>
    <td><label>
      <textarea name="address"></textarea>
    </label></td>
  </tr>
  <tr>
    <td>Total</td>
    <td><label>
      <input name="total" type="text" size="40" value="<?php echo $_POST['total']; ?>"/>
    </label></td>
  </tr>
  <tr>
    <td>Shipping Cost </td>
    <td><label>
    <?php $shipcost ='0.00' ;?>
      <input name="shipcost" type="text" size="40" value= "0.00"/>
    </label></td>
  </tr>
  <tr>
    <td>Date</td>
    <td><label>
      <input name="o_date" type="text" size="40" value="<?php echo $td; ?>"/>
    </label></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><label>
    <select name="status">
    <option>pending</option>
      <option>processed</option>
      
    </select>
    </label></td>
  </tr>
  <tr>
    <td><label>
      <input type="submit" name="submit" value="Send Order" />
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
			<div class="box" id="content-box1">
			 
			 
			</div>
			<div class="box" id="content-box2">
			 
			</div>
			<br class="clearfix" />
		</div>
		<div id="sidebar">
			<div class="box">
					<h3>Plots for Sale</h3>
				<ul class="list">
				
				<!-- reading latest 3 plots from plots table -->
			 <?php
			 	include("db.php");
					  $res=mysql_query("select * from plots  ORDER BY id DESC LIMIT 3");
					  $a=1;
					  while($re=mysql_fetch_array($res))
					  {
					  
					  ?>
			
					<li><a href="view_plot.php?pid=<?php echo $re['id']; ?>"> 
                    <img src="images/plots/<?php echo $re['plot_img']; ?>" height="50" width="50">
                    </a>  <?php echo $re['plot_title']; ?></li>
			
				<?php
	}
	
?>	
					
				</ul>
			</div>
			<div class="box">
				<h3>Commercial Buildings </h3>
				<div class="date-list">
					<ul class="list date-list">
						<li class="first"><span class="date">2/08</span> <a href="#">Quam sed tempus</a></li>
						<li><span class="date">2/05</span> <a href="#">Lorem et vestibulum</a></li>
						<li><span class="date">2/01</span> <a href="#">Risus aenean tellus</a></li>
						<li class="last"><span class="date">1/31</span> <a href="#">Tristique et primis</a></li>
					</ul>
				</div>
			</div>
		</div>
		<br class="clearfix" />
		<br/><br/><br/><br/><br/><br/>
	</div>  
    
<!-- footer bigin -->	
	
  <div id="footer">
     &copy; Reality_Solutions. All rights reserved. 
     
    <br class="clearfix" />
     </div>  
    <!-- footer end -->
</div>

</body>
</html>