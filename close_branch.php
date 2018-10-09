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
body
    {
        color:red;
        background-color: lightgray;
    }
    
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    border-radius: 4px;
}
.button1:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
} 
 
div
{
border-radius:5px;
background-color:lightgoldenrodyellow;
padding:20px;
}
    </style></head>
<body>

<h2 style="color:darkred"align="center"><b>Delete Branch</b></h2>

<div>
    <form action="close_branch.php" method="post">        
        
       <label for="bid"><b>Select Branch_Id:</b></label>
        <select id="bid" name="bid">
        
            
            <?php
            
               $branchid="select b_id from branch";
                $result=mysqli_query($con,$branchid);
               while($id=mysqli_fetch_assoc($result))
                {
                   echo "<option>";
                   $ID=$id['b_id'];
                   echo $ID;
                   echo "</option>";
                   }
            
            $close="DELETE FROM branch where b_id='$_POST[bid]'";
            $close=mysqli_query($con,$close);
            ?>
            </select>
        <button class="button button1">Delete</button>
    </form>
</div>
</body>
</html>