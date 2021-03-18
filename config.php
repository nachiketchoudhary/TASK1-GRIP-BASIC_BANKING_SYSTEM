<?php 

$server="localhost:3306";
$username="root";
$password="";
$db="bank db";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>
