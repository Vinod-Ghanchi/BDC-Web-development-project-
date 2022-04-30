<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " .mysqli_connect_error());
}
else{
    echo "Connection succesfull<br>";
}

// sql to create database
$sql = "CREATE DATABASE BDC";
$result= mysqli_query($conn,$sql);
if($result){
    echo "Database created succesfull";
}
else{
    echo "Error encountered while creating database".mysqli_connect_error();
} 
    
?>
