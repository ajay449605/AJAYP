
<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="courier"; 
$con=mysqli_connect($host,$user,$password,$db);
//$empid=$_GET['emp'];
$sid=$_SESSION['sid'];


 if(isset($_SESSION['sid'])){
   /*  $date="";
     $time="";
      $sql = "SELECT date,time from shipment_status where sh_id='$sid'";
        $result = mysqli_query($con,$sql);
       while($row =mysqli_fetch_assoc($result))
        {
        $date=$row['date'];
        $time=$row['time'];
        }
    */
   if(isset($_GET['submit']))
    { 
    //   $x=$_GET['status'];
       $empid=$_GET['empid'];
       $status=$_GET['status'];
       $date=$_GET['date'];
       $time=$_GET['time'];
       $sql="INSERT INTO shipment_status(`sh_id`,`date`,`time`,`current_status`,`emp_id`)values('$sid','$date','$time','$status','$empid')";
       
       if(!mysqli_query($con,$sql))
       {
        die('Error:'.mysqli_error($con));   
       }
      $message = "Updated Successfully";
       echo "<script type='text/javascript'>alert('$message');</script>";
    }
 }

?>

<html>
<head>
     
     <title>Shipment Status</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
    
<title>Update Status Here</title>
<style>
h1{
font-size:30px;
font-style:bold;
color:red;
}
p{
font-style:bold;
font-size:20px;
padding-left:50px;
margin-left:200px;
color:black;
border:2 px solid black;
}
input{
border:2px solid black;
border-style:groove;
}
</style>
</head>
<body >

     <nav style="height:2cm" class="navbar navbar-inverse navbar-fixed-top">
    <ul class="nav navbar-nav navbar-left" id="a">
        <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white;"><h2><b>A&N COURIER SERVICES</b></h2></a>
  <!--      <a class="navbar-brand" href="index.html"><h3 align="center">Welcome To Admin Previlige</h3></a>-->
      </div>
  </div>
    </ul>
    </nav>

<br><br><br><br>
    

<br><br>
<h1 align="center"><u><b>UPDATE OLD STATUS</b></u> </h1><br>
<form action="" method="GET">

<p>Enter Employee Id: <input type="text" name="empid" style="margin-left:40px;border:2px solid green; border-style:groove;" size=24 required></p><br>
<p>Enter Date: <input type="text" name="date" style="margin-left:110px;border:2px solid green; border-style:groove;" size=24 required></p><br>
<p>Enter Time: <input type="text" name="time" style="margin-left:110px;border:2px solid green; border-style:groove;" size=24 required></p><br>
<p>New Status :
<select name="status" name="status" style="margin-left:100px;border:2px solid black;border-style:groove;">
<option value="Select New Status">Select New Status</option>
<option value="Not Dispatch Yet">Not Dispatch Yet</option>
<option value="Shipment Dispatched By">Shipment Dispatched By</option>
<option value="Shipment Recieved By">Shipment Recieved By</option>
<option value="Shipment is out for delivery">Shipment is out for delivary</option>
<option value="Delivered">Delivered</option>
</select>
<br><br><br>
&#8195;&emsp;&ensp;&#8195;&emsp;&ensp;&#8195;&emsp;&ensp;&#8195;&emsp;&emsp;&ensp;&#8195;&emsp;  <button type="submit" name="submit">Update</button>
&nbsp;&nbsp;
    <button type="reset">Reset</button>
</form>
    
</body>
</html>