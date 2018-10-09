<!DOCTYPE  html>
<html>
<head>
  <title>Update_Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav style="height:2cm" class="navbar navbar-inverse navbar-fixed-top">
    <ul class="nav navbar-nav navbar-left" id="a">
        <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white;"><h2 ><b>A&N COURIER SERVICES</b></h2></a>
        <a class="navbar-brand" href="#"><h3 >Update Employee</h3></a>
      </div>
  </div>
    </ul>
        </nav>
<br><br><br><br><br><br>
<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="courier"; 
$con=mysqli_connect($host,$user,$password,$db);
//$empid=$_GET['emp'];
$empid=$_SESSION['seid'];
//echo $empid;
    if(isset($_SESSION['seid'])){
      $sql = "SELECT emp_id,b_id,emp_name,emp_add,emp_city,emp_state,emp_contact,emp_prof,emp_age,emp_salary ,gender from employee where emp_id='$empid'";
        $result = mysqli_query($con,$sql);
        while($row =mysqli_fetch_row($result))
        {
        $id=$row[0];
        $bid=$row[1];
        $name=$row[2];
        $address=$row[3];
        $city=$row[4];
        $state=$row[5];
        $contact=$row[6];
        $profession=$row[7];
        $age=$row[8];
        $salary=$row[9];
        $gender=$row[10];
        }
    }
    if(isset($_GET['update']))
    { 
        
          $sqlu="UPDATE employee SET emp_name='".$_GET['empname']."',gender='".$_GET['gender']."',b_id='".$_GET['branch']."',emp_age='".$_GET['age']."',emp_contact='".$_GET['contact']."',emp_prof='".$_GET['empprofession']."',emp_salary='".$_GET['salary']."',emp_add='".$_GET['address']."',emp_state='".$_GET['state']."',emp_city='".$_GET['city']."' WHERE emp_id ='".$empid."'";
          mysqli_query($con,$sqlu);
        
         $message = "Updated Successfully";
         echo "<script type='text/javascript'>alert('$message');</script>";    
        
    }

?>
<form action="" method="GET">
        
       <label for="id">Employee_Id</label>
        <input type="text" id="lname"name="id"value="" placeholder="<?php echo $id ?>">

    
        <label for="branch" >Branch_Id</label>
        <input type="text" id="lname"name="branch"placeholder="" value="<?php echo $bid ?>">
        <br><br>
        
        <label for="empname"style="width:100%;">Employee Name</label>
        <input type="text"id="Ename"name="empname" placeholder="" value="<?php echo $name ?>"style="width:40%;">
        
        <br>
        <br>          
        <label >Gender:</label>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Trans-gender">Trans Gender
        <input type="radio" name="gender" value="Other">Other
        <br>
         
        <label for="age">Age</label>
        <input type="text" id="lname"name="age" placeholder="" value="<?php echo $age ?>">
        
        
        <label for="contact">Contact Number</label>
        <input type="text" id="lname"name="contact" placeholder="" value="<?php echo $contact ?>">
        <br><br>
        
        <label for="empprofession"style="width:100%;">Employee Profession</label>
        <input type="text"id="lname"name="empprofession" placeholder="" value="<?php echo $profession ?>" style="width:20%">
        
        <label for="salary">Enter Salary(Rs.)</label>
        <input type="text" id="lname"name="salary" placeholder="" value="<?php echo $salary ?>">
        <br>
        <br>
        
         <label for="address"style="width:100%;">Employee Address:</label>
        <input type="text" id="lname"name="address" placeholder="" value="<?php echo $address ?>"style="width:50%;">
        <br><br>
        
        <label for="state">State:</label>
        <select id="state" name="state" placeholder="" value="<?php echo $state ?>">
        
        <option value="utter pradesh">Utter Pradesh</option>
        <option value="j&k">J&K</option>
        <option value="bihar">Bihar</option>
         <option value="madhya praddesh">Madhya Pradesh</option>
        <option value="maharashtra">Maharashtra</option>
        <option value="kerla">Kerla</option>
        </select>
        
        <label for="city"style="width:100%;">Employee City</label>
        <input type="text" id="lname"name="city" placeholder="" value="<?php echo $city ?>">
        <br><br>

        <button type="submit" name="update" >Update</button>
        
    </form>
    </body>
</html>