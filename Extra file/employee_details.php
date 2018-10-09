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
        
       <label for="empid"><b>Select Employee_Id:</b></label>
        &nbsp;<select id="empid" name="empid">   
            <option value="">Select</option>
            <?php
             
               $consid="select emp_id from employee";
                $result=mysqli_query($con,$consid);
               while($id=mysqli_fetch_assoc($result))
                {
                  
                   echo "<option name='emp_id'>";
                    $ID=$id['emp_id'];
                   echo $ID;
                   echo "</option>";
                   }            
            
            $empid=$_POST['empid'];  
            ?>
            </select>
    
       <button class="button button1" name="submit">Show</button>
       <button class="button button1" name="reset">Reset</button>
       <br>
    </form>
    <br>    
    <div id="" align="center"style="color:darkred;"><b>Employee Details Here</b></div>
    <br>
<?php
    if(isset($_POST['submit']))
    {
    $sql = "SELECT emp_id,emp_name,emp_age,emp_prof,emp_contact,emp_salary,emp_add,emp_city,emp_state from employee where emp_id='$empid'";
        
        $result = $con->query($sql);

        if ($result->num_rows > 0)
        {
        echo "<table><tr> <th>Employee_ID</th><th>Name</th><th>Age</th><th>Profession</th><th>Contact No.</th><th>Salary</th><th>Address</th><th>City</th><th>State</th><th>Update</th></tr>";
            // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" .$row["emp_id"]. " </td><td>".$row["emp_name"]. " </td><td>". $row["emp_age"]."</td><td>". $row["emp_prof"]. "</td><td>". $row["emp_contact"]. "</td><td>". $row["emp_salary"]."</td><td>".$row["emp_add"]."</td><td>". $row["emp_city"]. "</td><td>". $row["emp_state"]. "</td><td><a href='edit.php?roll=",$row[0],"'>Edit</a></td></tr>";
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