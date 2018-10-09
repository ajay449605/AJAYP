<?php
$server='localhost';
$user='root';
$pass='';
$db='courier';

$con=mysqli_connect($server,$user,$pass,$db);
if(!$con)
{
    die("Could not connect to server..\n".mysqli_error());
}
echo "mission successful";

?>
