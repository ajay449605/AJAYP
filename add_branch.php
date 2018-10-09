<?php
$host="localhost";
$user="root";
$password="";
$db="courier";
$con=mysqli_connect($host,$user,$password,$db);


$sql="INSERT INTO branch(`b_id`,`b_name`,`b_city`,`b_pin_code`,`b_add`,`b_timing`,`b_state`)values('$_POST[bid]','$_POST[bname]','$_POST[bcity]','$_POST[bpincode]','$_POST[badd]','$_POST[btime]','$_POST[state]')";


if(!mysqli_query($con,$sql))
{
    die('Error:'.mysqli_error($con));
}
echo "Branch Added successfully"
    
?>