<!--php  code-->
<?php 
  session_start(); 

  if (!isset($_SESSION['userid'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
-->


<html>
<head>
    <title>A&N COURIER</title>
    <!--link href="style.css" rel="stylesheet" type="text/css"-->
    <style>
*
{
    margin: 0;
    padding: 0;
}

body
{
    font-family: tahoma;
}


.row
{
    max-width: 1140px;
    margin: 0,auto;
}
.hero
{
    position: absolute;
    width: 1140px;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}

header
{
 background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(index_image.jpg);
    height: 100vh;
    background-position: center;
    background-size: cover;
}

h1
{
    color: lightgreen;
}

.main-nav
{
    list-style: none;
    float: right;
    margin-top: 60px;
}

.main-nav li
{
   display: inline-block;
    margin-left: 20px;
}

.main-nav li a
{
    color: white;
    text-decoration: none;
    font-size: 90%;
    font-weight: bold;
}


.main-nav li a:hover
{
    color: blue;
    border-bottom: 2px solid #e67e22;
    transition: 0.5s ease-in;
    padding: 15px 0;
    
}
.logo img
{
    height: 100px;
    float: left;
    margin-top: 30px; 
}


.btn
{
    border: 1px solid #e67e22;
    padding: 10px 30px;
    color: #e67e22;
    text-decoration: none;
    border-radius: 12px;
    margin-right: 15px;
}

.button-awesome
{
    margin-top: 40PX;
    
}

.btn-half:hover
{
    background-color: #e67e22;
    color: white;
    transition: all 0.5s ease-in;
}
.btn-full:hover
{
    background-color: #e67e22;
    color: white;
    transition: all 0.5s ease-in;
}
    </style>
</head>

<body>
    <header>
        
        <div class="row">
        <ul class="main-nav">
            <li><a href="">HOME</a></li>    
            <li><a href="">EMPLOYEE</a></li>
            <li><a href="">CUSTOMER</a></li>
            <li><a href="">ABOUT US</a></li>
            <li><a href="">CONTACT US</a></li>
            
        </ul>    
        
        
        </div>
    <div class="hero">
        <h1>A&N COURIER MANAGEMENT <br>SERVICES</h1>  
        <div class="button-awesome">
        <a href="admin_login.html" class="btn btn-half">LOG IN</a>
        <a href="form.html" class="btn btn-full">SIN UP</a>
        <a href="form.html" class="btn btn-full">Track Shipment</a>
            </div>
    </div>
    </header>
    
    
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    
    
    
     <?php  if (isset($_SESSION['userid'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['userid']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
    
    
</body>
</html>