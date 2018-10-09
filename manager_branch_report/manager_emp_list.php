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
  <h3 align="center" style="color:white;">Employee List</h3>
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
    $sql = "SELECT * from employee where employee.b_id=$bid";
        
        $result = $con->query($sql);

        if ($result->num_rows > 0)
        {
        echo "<table><tr><th>Employee_ID</th><th>Name</th><th>Gender</th><th>Address</th><th>City</th><th>State</th><th>Contact No.</th><th>Profession</th><th>Age</th><th>Salary</th></tr>";
            // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["emp_id"]."</td><td>".$row["emp_name"]."</td><td>".$row["gender"]."</td><td>". $row["emp_add"]."</td><td>".$row["emp_city"]."</td><td>".$row["emp_state"]."</td><td>".$row["emp_contact"]."</td><td>".$row["emp_prof"]."</td><td>".$row["emp_age"]."</td><td>".$row["emp_salary"]."</td></tr>";
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