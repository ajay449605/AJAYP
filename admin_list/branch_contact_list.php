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
  <a href="#default" class="logo">A&N COURIER SERVICES</a><br>
  <h3 align="center" style="color:white;">Branch List</h3>

</div>
    
    <?php
$host="localhost";
$user="root";
$password="";
$db="courier";
$con=mysqli_connect($host,$user,$password,$db);
?>
    
  <br><br>  
<?php
    
    $sql = "SELECT *from branch";
        
        $result = $con->query($sql);

        if ($result->num_rows > 0)
        {
        echo "<table><tr><th>Branch Id</th><th>Name</th><th>Address</th><th>City</th><th>Pin code</th><th>Timing</th><th>State</th><th>Contact</th></tr>";
            // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["b_id"]."</td><td>".$row["b_name"]."</td><td>".$row["b_add"]."</td><td>". $row["b_city"]."</td><td>".$row["b_pin_code"]."</td><td>".$row["b_timing"]."</td><td>".$row["b_state"]."</td><td>".$row["contact"]."</td></tr>";
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