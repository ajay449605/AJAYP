<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
      	<?php include('errors.php'); ?>
  <label>Select type</label><br>
  <input type="radio" name="usertype" value="admin"> Admin
  <input type="radio" name="usertype" value="manager"> Manager
  <input type="radio" name="usertype" value="assistant"> Assistant
  <input type="radio" name="usertype" value="delivery boy"> Delivery Boy

      <br><br>
      <label for="bid"><b>Select Branch_Id:</b></label>
        <select id="bid" name="bid">
         <option value="">Select</option>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'courier');
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
      
      
  	<div class="input-group">
  		<label>User ID</label>
  		<input type="text" name="userid" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
        <button type="reset" class="btn" name="login_user">Reset</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>