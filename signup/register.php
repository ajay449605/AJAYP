<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>User Id</label>
  	  <input type="text" name="userid" value="<?php echo $username; ?>">
  	</div>
    
      <div class="label-group">
      <label for="profession">Profession:</label>
        <select id="profession" name="profession">
        <option value="">Select</option>
        <option value="manager">Manager</option>
        <option value="assistant">Assistant</option>
        <option value="delivery boy">Delivery Boy</option>
        </select>
       	</div>
          
          
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
      
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
       <button type="reset" class="btn" >Reset</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>