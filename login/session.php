<?php
 
$host="localhost";
$user="root";
$password="";
$db="courier";
$con=mysqli_connect($host,$user,$password,$db);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select emp_id from register where emp_id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['userid'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>