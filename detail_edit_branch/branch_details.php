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
        
       <label for="bid"><b>Select Branch_Id:</b></label>
        &nbsp;<select id="bid" name="bid">   
            <option value="">Select</option>
            <?php
             
               $consid="select b_id from branch";
                $result=mysqli_query($con,$consid);
               while($id=mysqli_fetch_assoc($result))
                {
                  $ID=$id['b_id'];
                   echo "<option value='$ID'>";
                    
                   echo $ID;
                   echo "</option>";
                   }            
            
            $bid=$_POST['bid'];  
            ?>
            </select>
    
       <button class="button button1" name="submit">Show</button>
       <button class="button button1" name="reset">Reset</button>
       <br>
    </form>
    <br>    
    <div id="" align="center"style="color:darkred;"><b>Branch Details Here</b></div>
    <br>
<?php
    if(isset($_POST['submit']))
    {
    $sql = "SELECT b_id,b_name,b_city,b_pin_code,b_add,b_state,b_timing,contact from branch where b_id='$bid'";
        
        $result = $con->query($sql);

        if ($result->num_rows > 0)
        {
        echo "<table><tr><th>Branch_ID</th><th>Name</th><th>City</th><th>Pin code</th><th>Address</th><th>state</th><th>Time</th><th>Contact</th></tr>";
            // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" .$row["b_id"] . "</td><td>".$row["b_name"]."</td><td>".$row["b_city"]. " </td><td>". $row["b_pin_code"]."</td><td>". $row["b_add"]. "</td><td>". $row["b_state"]. "</td><td>". $row["b_timing"]."</td><td>".$row["contact"]."</td></tr>";
        }
        echo "</table>";
    } 
    else 
    {
    echo "0 results";
    }
        
$con->close();
}
   session_start();
    $_SESSION['seid']=$bid;
?>    
    
    <a href="branch_edit.php?bid=<?php echo $bid ?>"><h1 align="center">Update Record</h1></a>
</body>
</html>