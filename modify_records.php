 <?php
include("db.php");

if(isset($_POST['edit_row']))
{
 $row=$_POST['row_id'];
 $plot_type=$_POST['plot_type_val'];
 $address=$_POST['address_val'];
  $monthly_rent=$_POST['monthly_rent_val'];
 $lease_availability=$_POST['lease_availability_val'];
  $forsale=$_POST['forsale_val'];
 

 mysql_query("update plots set plot_type='$plot_type',address='$address' ,monthly_rent='$monthly_rent',lease_availability='$lease_availability',forsale='$forsale' where id='$row'");
 echo "success";
 exit();
}

if(isset($_POST['delete_row']))
{
 $row_no=$_POST['row_id'];
 mysql_query("delete from plots where id='$row_no'");
 echo "success";
 exit();
}

if(isset($_POST['insert_row']))
{
 $plot_type=$_POST['plot_type_val'];
 $address=$_POST['address_val'];
  $monthly_rent=$_POST['monthly_rent_val']; 
 $lease_availability=$_POST['lease_availability_val'];
   $forsale=$_POST['forsale_val'];
 mysql_query("insert into plots values('','$plot_type','$address','$monthly_rent','$lease_availability','$forsale')");
 echo mysql_insert_id();
 exit();
}
?>