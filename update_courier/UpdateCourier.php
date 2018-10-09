<?php
$host="localhost";
$user="root";
$password="";
$db="courier";
$con=mysqli_connect($host,$user,$password,$db);
?> 
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
     <title>Update_Courier</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
<title>Consignment Update</title>
<style>
h3{
font-size:15px;
font-style:bold;
color:red;
}
p{
font-style:bold;
font-size:20px;
padding-left:50px;
margin-left:70px;
color:black;
border:2 px solid black;
}
input{
border:2px solid black;
border-style:groove;
}
#status{
display:none;
}
</style>
</head>
<body >   
    
   
    
    
    
    
    
    <!--PHP code to get-->
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
            header('location:UpdateCourierStatus.php');
        }
        
        else
        {
         $message = "Consignment ID does not exist.";
       echo "<script type='text/javascript'>alert('$message');</script>";

           
        }
    }
        
$con->close();
   
?>
    
    
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

<form action="" method="post"><br><br><br>
    <h1 align="center">Enter Consignment Number</h1><br>
    &#8195; &emsp;&ensp;&#8195; &#8195; &emsp;&ensp;&#8195; &#8195; &emsp;&ensp;&#8195; &#8195; &emsp;&ensp;&#8195; &#8195; &emsp;&ensp;&#8195; 
    <input type="text" align="center" name="cid" style="margin-left:150px;" required > &nbsp;&nbsp;&nbsp;
    <button type="submit" name="submit">Get Consignment</button>
    <button type="reset" name="reset">Reset</button>
</form>
 
    
</body>
</html>