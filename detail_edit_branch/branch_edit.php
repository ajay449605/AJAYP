<!DOCTYPE  html>
<html>
<head>
  <title>Update_Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    set
    {
        margin-right: 2px;
    }
</style>
</head>
<body>
<nav style="height:2cm" class="navbar navbar-inverse navbar-fixed-top">
    <ul class="nav navbar-nav navbar-left" id="a">
        <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white;"><h2 ><b>A&N COURIER SERVICES</b></h2></a>
        <a class="navbar-brand" href="#"><h3 >Update Branch</h3></a>
      </div>
  </div>
    </ul>
        </nav>
<br><br><br><br><br><br>

<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="courier"; 
$con=mysqli_connect($host,$user,$password,$db);
//$empid=$_GET['emp'];
$bid=$_SESSION['seid'];
//echo $empid;
    if(isset($_SESSION['seid'])){
      $sql = "SELECT b_id,b_name,b_city,b_add,b_pin_code,b_state,b_timing,contact from branch where b_id='$bid'";
        $result = mysqli_query($con,$sql);
        while($row =mysqli_fetch_row($result))
        {
        $bid=$row[0];
        $name=$row[1];
        $city=$row[2];
        $address=$row[3];
        $pincode=$row[4];
        $state=$row[5];
        $time=$row[6];
        $contact=$row[7];
        }
    }
    if(isset($_GET['update']))
    { 
        
          $sqlu="UPDATE branch SET b_name='".$_GET['bname']."',b_city='".$_GET['city']."',b_add='".$_GET['address']."',b_pin_code='".$_GET['pincode']."',b_timing='".$_GET['time']."',b_state='".$_GET['state']."',contact='".$_GET['contact']."' WHERE b_id ='".$bid."'";
          mysqli_query($con,$sqlu);
        
    }

?>
    <div class="set">
<form action="" method="GET">
        
        <label for="id">Branch_Id</label>
        <input type="text" id="lname"name="id"placeholder="" value="<?php echo $bid ?>">

        
        <label for="bname">Branch Name</label>
        <input type="text"id="bname"name="bname" placeholder="" value="<?php echo $name ?>"style="width:40%;">
        
        <br>
        <br>            

         
        <label for="city">City</label>
        <input type="text" id="lname"name="city" placeholder="" value="<?php echo $city ?>">
        
        
        <label for="address">Address</label>
        <input type="text" id="lname"name="address" placeholder="" value="<?php echo $address ?>">
        <br><br>
        
        <label for="pincode"style="width:100%;">Pin code</label>
        <input type="text"id="lname"name="pincode" placeholder="" value="<?php echo $pincode ?>" style="width:20%">
        
        <label for="time">Time</label>
        <input type="text" id="lname"name="time" placeholder="" value="<?php echo $time ?>">
        <br>
        <br>
        
    
        
        <label for="state">State:</label>
        <select id="state" name="state" placeholder="" value="<?php echo $state ?>">
        <option value="">Select State</option>
        <option value="utter pradesh">Utter Pradesh</option>
        <option value="j&k">J&K</option>
        <option value="bihar">Bihar</option>
         <option value="madhya praddesh">Madhya Pradesh</option>
        <option value="uttarakhand">Uttarakhand</option>
        <option value="maharashtra">Maharashtra</option>
        <option value="kerla">Kerla</option>
        </select>
        
        <label for="contact">Contact</label>
        <input type="text" id="lname"name="contact" placeholder="" value="<?php echo $contact ?>">
        <br><br>

        <button type="submit" name="update" >Update</button>
        
        </form></div>
    </body>
</html>