<!DOCTYPE html>
<html>
<head>
<style>
    table, th, td {
                border: 1px solid black;
        text-align: center; 
        margin: auto;
                }
    
    
    <!-------------Header---------->
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial;
}

.header {
  overflow: hidden;
  background-color: black;

}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 30px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
 color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
    <!-------------Header---------->
    
</style>
</head>
<body>
    
    <div class="header">
  <a href="#default" class="logo">A&N COURIER SERVICES</a>
</div>
     <h1 align="center" style="color:red;"><u>Consignment Tracking Details</u></h1>
    <?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="courier"; 
$con=mysqli_connect($host,$user,$password,$db);
//$empid=$_GET['emp'];
  $cid=$_SESSION['cid'];
 if(isset($_SESSION['cid'])){
     
   //  echo $cid;
      
    $sql ="select courier.cons_id,courier_status.current_state,branch.b_name,branch.b_city,courier_status.date,courier_status.time from branch,employee,courier_status,courier where branch.b_id=employee.b_id AND courier.cons_id=courier_status.cons_id AND courier_status.emp_id=employee.emp_id and courier.cons_id='$cid'";
        
        $result = $con->query($sql);

        if ($result->num_rows > 0)
        {
        echo "<table><tr><th>Consignment_Id</th><th>Current Status</th><th>Branch Name</th><th>City</th><th>Date</th><th>Time</th></tr>";
            // output data of each row
            
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" .$row["cons_id"]. "</td><td>".$row["current_state"]."</td><td>".$row["b_name"]. " </td><td>". $row["b_city"]."</td><td>". $row["date"]. "</td><td>". $row["time"]."</td></tr>";
        }
        echo "</table>";
    } 
    else 
    {
    echo "0 results";
    }
        
$con->close();
}
    ?>
    </body>
</html>