<?php
$host="localhost";
$user="root";
$password="";
$db="courier";
$con=mysqli_connect($host,$user,$password,$db);
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<h2 align="center">Courier Details</h2>
<label for="cons_id"><b>Select Consignment_ID:</b></label>
        <select id="cons_id" name="co_id">
            
           /*To show courier list from database*/s 
             <?php
            
               $branchid="select cons_id from courier";
                $result=mysqli_query($con,$branchid);
               while($id=mysqli_fetch_assoc($result))
                {
                   echo "<option>";
                    $ID=$id['cons_id'];
                   echo $ID;
                   echo "</option>";
                   }
           echo $courier="SELECT DISTINCT(courier.b_id),branch.b_id,branch.b_name,branch.b_city,branch.b_pin_code,branch.b_add,branch.b_state FROM branch,courier WHERE branch.b_id=courier.b_id AND courier.cons_id=co_id";
            $c=mysqli_query($con,$courier);
            while($details=mysqli_fetch_assoc($c))
            {
                
            }
            ?>
    </select>
<br><br>
<table>
  <tr>
    <th>Branch_ID</th>
    <th>Branch Name</th>
    <th>Address</th>
    <th>Pin Code</th>
    <th>State</th>
  </tr>

</table>

</body>
</html>
