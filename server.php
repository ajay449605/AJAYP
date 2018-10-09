<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'courier');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['userid']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $profession = mysqli_real_escape_string($db, $_POST['profession']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $bid = mysqli_real_escape_string($db, $_POST['bid']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM register WHERE emp_id='$username' OR email_id='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  //$active = $row['active'];
  
  if ($user) { // if user exists
    if ($user['emp_id'] === $username) {
      array_push($errors, "Userid already exists");
    }

    if ($user['email_id'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = ($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO register (emp_id, email_id, emp_prof, password,b_id) 
  			  VALUES('$username', '$email', '$profession', '$password',$bid)";
  	mysqli_query($db, $query);
  	$_SESSION['userid'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    $message = "User Registered Successfully";
       echo "<script type='text/javascript'>alert('$message');</script>";
  	header('location: index.html');
  }
}

// login user....... 
//$usertype=$_POST['rf'];
$link="";
    
if (isset($_POST['login_user'])) {
  $type = mysqli_real_escape_string($db, $_POST['usertype']);
  $username = mysqli_real_escape_string($db, $_POST['userid']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $bid = mysqli_real_escape_string($db, $_POST['bid']);
  
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    //$password = ($password);
    $query = "SELECT * FROM register  WHERE emp_id='$username' AND password='$password' and emp_prof='$type'";
    $results = mysqli_query($db, $query);
      if(mysqli_num_rows($results) >0){
    //echo "Profession".$profession;
        //different type login
      if(strcmp($type,'manager')==0){
            $_SESSION['bid']  =$bid;
            header("location:./manager_page.php");
      }
      if (strcmp($type,'admin')==0){
           // $link = 'admin_page.html';
            header("location:./admin_page.html");
      }
          
    if (strcmp($type,'assistant')==0){
             $_SESSION['bid']  =$bid;
            header("location:./Assistant_page.html");
      }
      
      
      
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['emp_id'] = $username;
      $_SESSION['success'] = "You are now logged in";
      //header("location: ".$link."");
    }
      }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>