<?php
$host="localhost";
$user="root";
$password="";
$db="courier";
$con=mysqli_connect($host,$user,$password,$db);
?> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<title>Track Shipment here</title>
<style>
img{
margin:0px;
}
h3{
font-style:italic;
color:black;
}
p{
font-style:bold;
font-size:20px;
padding-left:50px;
margin-left:70px;
color:blue;
border:2 px solid black;
}
input{
border:2px solid black;
border-style:ridge;
}
</style> 
</head>
<body>
    
<?php
  
    if(isset($_POST['submit']))
    {
        $cid=$_POST['cid'];
        $sql = "SELECT cons_id from courier where cons_id='$cid'";
        
        $result = mysqli_query($con,$sql);
        
        if(mysqli_num_rows($result)>0)
        {
        
            session_start();
            $_SESSION['cid']=$cid;
            header('location:track_process_cons.php');
        }
        
        else
        {
         $message = "Consignment ID does not exist.";
         echo "<script type='text/javascript'>alert('$message');</script>";           
        }
    }
        
$con->close();   
?>    
    
<div class="container" style="margin-top:5px;border:2px solid black;">
<img src="track_cons.jpg" width="1220" height="300">
<!--marquee direction="right"><img src="" width=100></marquee><br><br-->
<marquee> <h3 > TRACK CONSIGNMENT STATUS (We Know Delievery Value)</h3></marquee>
<form action="" method="post">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <lable align="center"><b>Enter Consignment_ID </b></lable>
    <input type="text" name="cid" style="margin-left:100px;" required > &nbsp;&nbsp;&nbsp;
    <button type="submit" name="submit" onclick="tStatus()">Get Shipment</button>
</form><br><br>
</div>
</body>
</html>