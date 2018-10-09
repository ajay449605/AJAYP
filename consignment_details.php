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
    
    <?php
$host="localhost";
$user="root";
$password="";
$db="courier";
$con=mysqli_connect($host,$user,$password,$db);
?>
    
    <br><br><br>
   <form action="" method="post" align="center">        
        
       <label for="consid"><b>Select Consignment_Id:</b></label>
        &nbsp;<select id="consid" name="consid">   
            <option value="">Select</option>
            <?php
             
               $consid="select cons_id from courier";
                $result=mysqli_query($con,$consid);
               while($id=mysqli_fetch_assoc($result))
                {
                  
                   echo "<option name='consid'>";
                    $ID=$id['cons_id'];
                   echo $ID;
                   echo "</option>";
                   }            
            
            $consid=$_POST['consid'];  
            ?>
            </select>
    
       <button class="button button1" name="submit">Show</button>
       <button class="button button1" name="reset">Reset</button>
       <br>
    </form>
    <br>    
    <div id="" align="center"style="color:darkred;"><b>Consignment Details Here</b></div>
    <br>
<?php
    if(isset($_POST['submit']))
    {
    $sql = "SELECT DISTINCT(courier.cons_id),courier.cons_id,branch.b_id,branch.b_name,branch.b_add,branch.b_pin_code,branch.b_city,branch.b_state,courier.receive_date,courier.receive_time FROM branch,courier WHERE courier.b_id=branch.b_id and courier.cons_id='$consid' ";
        
        $result = $con->query($sql);

        if ($result->num_rows > 0)
        {
        echo "<table><tr> <th>Consignment_ID</th><th>Branch_ID</th><th>Branch Name</th><th>Address</th><th>Pin Code</th><th>City</th><th>State</th><th>Receive Date</th><th>Receive Time</th></tr>";
            // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" .$row["cons_id"]. " </td><td>".$row["b_id"]. " </td><td>". $row["b_name"]."</td><td>". $row["b_add"]. "</td><td>". $row["b_pin_code"]. "</td><td>". $row["b_city"]."</td><td>".$row["b_state"]."</td><td>". $row["receive_date"]. "</td><td>". $row["receive_time"]. "</td></tr>";
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