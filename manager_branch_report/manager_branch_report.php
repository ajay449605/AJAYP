<!DOCTYPE html>
<html>
<head>
<style>
    table, th, td {
                border: 1px solid black;
        text-align: center; 
        margin: auto;
        background-color: aquamarine;
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
  <a href="#default" class="logo">A&N COURIER SERVICES</a><br>
  <h3 align="center" style="color:white;">Branch Shipment Report</h3>
</div>
    <br><br>
    <?php
$host="localhost";
$user="root";
$password="";
$db="courier";
$con=mysqli_connect($host,$user,$password,$db);
?>
    
    
<?php
    session_start();
     $bid=$_SESSION['bid'];
    $sql = "SELECT courier.cons_id,shipments.sh_id,shipments.sh_type,shipments.sh_weight,shipments.sh_quantity,shipments.sh_price FROM courier,branch,shipments WHERE courier.b_id=branch.b_id AND courier.cons_id=shipments.cons_id AND branch.b_id=$bid";
        
        $result = $con->query($sql);

        if ($result->num_rows > 0)
        {
        echo "<table><tr><th>Consignment_ID</th><th>Shipment_ID</th><th>Shipment_Type</th><th>Shipment_weight</th><th>Quantity</th><th>Price</th></tr>";
            // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["cons_id"]."</td><td>".$row["sh_id"]."</td><td>".$row["sh_type"]."</td><td>". $row["sh_weight"]."</td><td>".$row["sh_quantity"]."</td><td>".$row["sh_price"]."</td></tr>";
        }
        echo "</table>";
    } 
    else 
    {
    echo "0 results";
    }
?>

</body>
</html>