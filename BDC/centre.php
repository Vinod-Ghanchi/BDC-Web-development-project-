<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BDC";

//CONNECTION TO DATABASE
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("database connection error".mysqli_connect_error());
}
else
{
    echo " database connected successfully <br> ";
}
// create table
$sql = "CREATE TABLE `bdc`.`centre` ( `regnum` INT NOT NULL , `centrename` VARCHAR(100) NOT NULL , `location` VARCHAR(100) NOT NULL , `pincode` INT(6) NOT NULL , `cphone` BIGINT(10) NOT NULL , `cemail` VARCHAR(100) NOT NULL , PRIMARY KEY (`regnum`), UNIQUE (`centrename`), UNIQUE (`cphone`)) ENGINE = InnoDB";


$result= mysqli_query($conn,$sql);
if($result){
    echo "Table creation successfull";
}
else{
    echo "Error encountered while creating table".mysqli_connect_error();
}
 
?>