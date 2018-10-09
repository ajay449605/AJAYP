<?php
$host="localhost";
$user="root";
$password="";
$db="courier";
$con=mysqli_connect($host,$user,$password,$db);


$sql="INSERT INTO employee(`emp_id`,`b_id`,`emp_name`,`gender`,`emp_add`,`emp_state`,`emp_city`,`emp_contact`,`emp_prof`,`emp_age`,`emp_salary`)values('$_POST[empid]','$_POST[branch]','$_POST[empname]','$_POST[gender]','$_POST[address]','$_POST[state]','$_POST[city]','$_POST[contact]','$_POST[empprofession]','$_POST[age]','$_POST[salary]')";

if(!mysqli_query($con,$sql))
{
    die('Error:'.mysqli_error($con));
}
echo "Added successfully"
    
?>