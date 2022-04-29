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
$sql = "CREATE TABLE `bdc`.`donor` ( `DID` INT UNSIGNED NOT NULL , `dname` VARCHAR(100) NOT NULL , `daadhar` BIGINT(8) NOT NULL , `dphone` BIGINT NOT NULL , `bloodgrp` VARCHAR(5) NOT NULL , `dgender` VARCHAR(6) NOT NULL , `dage` INT NOT NULL , `daddress` VARCHAR(100) NOT NULL , `weight` INT NOT NULL , `height` INT NOT NULL , `donated` FLOAT NOT NULL , PRIMARY KEY (`DID`), UNIQUE (`dname`), UNIQUE (`daadhar`), UNIQUE (`dphone`)) ENGINE = InnoDB";


$result= mysqli_query($conn,$sql);
if($result){
    echo "Table creation successfull";
}
else{
    echo "Error encountered while creating table".mysqli_connect_error();
}

?>
