<?php
$host="localhost";
$user="root";
$password="";
$db="courier";
$con=mysqli_connect($host,$user,$password,$db);


$sql="INSERT INTO courier(`cons_id`,`b_id`,`from_city`,`to_city`)values('$_POST[consid]','$_POST[bid]','$_POST[fromcity]','$_POST[tocity]')";



if(!mysqli_query($con,$sql))
{
    die('Error:'.mysqli_error($con));
}
  header("Location:'Add_consignment.html'");
   echo "Consignment added successfully";    
?>