<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$host="localhost";
$user="root";
$password="";
$db="courier";
$con=mysqli_connect($host,$user,$password,$db);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT DISTINCT(courier.cons_id),branch.b_id,branch.b_name,branch.b_add,branch.b_pin_code,branch.b_city,branch.b_state,courier.receive_date,courier.receive_time FROM branch,courier WHERE courier.b_id=branch.b_id;";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr> <th>Branch_ID</th><th>Branch Name</th><th>Address</th><th>Pin Code</th><th>City</th><th>State</th><th>Receive Date</th><th>Receive Time</th>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" .$row["b_id"]. " </td><td>". $row["b_name"]."</td><td>". $row["b_add"]. "</td><td>". $row["b_city"]. "</td><td>". $row["b_pin_code"]. "</td><td>". $row["receive_date"]. "</td><td>". $row["receive_time"]. "</td></tr>";
    }
    echo "</table>";
} 
else 
{
    echo "0 results";
}

$con->close();
?> 
</body>
</html>