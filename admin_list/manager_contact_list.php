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
  <h3 align="center" style="color:white;">Manager List</h3>
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
    
    $sql = "SELECT DISTINCT(branch.b_id),branch.b_name,employee.emp_id,employee.emp_name,employee.emp_age,employee.emp_contact,employee.emp_add,employee.emp_city,employee.emp_state,employee.emp_salary FROM employee,branch WHERE branch.b_id=employee.b_id AND employee.emp_prof='manager';";
        
        $result = $con->query($sql);

        if ($result->num_rows > 0)
        {
        echo "<table><tr><th>Branch_Id</th><th>Branch_Name</th><th>Manager_Id</th><th>Manager Name</th><th>Age</th><th>Contact</th><th>Address</th><th>City</th><th>State</th><th>Salary</th></tr>";
            // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["b_id"]."</td><td>".$row["b_name"]."</td><td>".$row["emp_id"]."</td><td>". $row["emp_name"]."</td><td>".$row["emp_age"]."</td><td>".$row["emp_contact"]."</td><td>".$row["emp_add"]."</td><td>".$row[ "emp_city"]."</td><td>".$row["emp_state"]."</th><td>".$row["emp_salary"]."</td></tr>";
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