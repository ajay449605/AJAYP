<?php
$host="localhost";
$user="root";
$password="";
$db="courier";
$con=mysqli_connect($host,$user,$password,$db);

if($con)
        echo "database connection failed";
else
{
    $id=$_POST["username"];
    $pass=$_POST["password"];
    $sql="select user_id,password from users where user_id='$id' and password='$pass'";
    
    if($ret>0)
    {
        header('location: user.html');
        
            echo "Welcome Username: '$id' password:' $pass' ";
    }
    else
        echo 'invalid username or password';
}
?>