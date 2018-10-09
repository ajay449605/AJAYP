<?php
$host="localhost";
$user="root";
$password="";
$db="courier";
$con=mysqli_connect($host,$user,$password,$db);


$sql="INSERT INTO shipments(`sh_id`,`cons_id`,`cust_id`,`emp_id`,`sh_type`,`sh_weight`,`sh_price`,`sh_quantity`,`receiver_name`,`receiver_contact`,`receiver_add`,`receiver_state`,`receiver_city`,`receiver_pin_code`,`booking_time`,`booking_date`)values('$_POST[shid]','$_POST[consid]','$_POST[custid]','$_POST[empid]','$_POST[shtype]','$_POST[shweight]','$_POST[shprice]','$_POST[shquantity]','$_POST[receiver]','$_POST[contact]','$_POST[add]','$_POST[state]','$_POST[city]','$_POST[pincode]','$_POST[bookingtime]','$_POST[bookingdate]')";


if(!mysqli_query($con,$sql))
{
    die('Error:'.mysqli_error($con));
}
echo "Added successfully";
    
?>