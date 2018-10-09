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
        <meta charset="utf-8">
        <title>Login Form</title>
        <link rel="stylesheet"href="css_files/admin_Style.css">
    </head>
    <body>
        <div class="loginBox">
            <img src="emp_image.jpg" class="user">
            <h2>Log In Here</h2>
            <form>
                <p>Email</p>
                <input type="text" name="" placeholder="Enter email">
                <p>Password</p>
                <input type="password" name="" placeholder="******">
                
        <label for="branch_id"style="color:white;"><b>Select Branch_Id:</b></label>
        <select id="branch_id" name="branch_id">
        
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
       ?>
                </select>
        <br><br>  
                <input type="submit" name="" value="Log In">
                <a href="#">Forget Password</a>
            </form>
        </div>
    </body>
</html>