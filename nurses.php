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
$sql = "CREATE TABLE `bdc`.`nurses` ( `nid` INT NOT NULL , `nname` VARCHAR(100) NOT NULL , `nage` INT NOT NULL , `naadhar` BIGINT(8) NOT NULL , `ngender` VARCHAR(10) NOT NULL , `hospital` VARCHAR(100) NOT NULL , `nphone` BIGINT(10) NOT NULL , PRIMARY KEY (`nid`), UNIQUE (`nname`), UNIQUE (`naadhar`), UNIQUE (`nphone`)) ENGINE = InnoDB";


$result= mysqli_query($conn,$sql);
if($result){
    echo "Table creation successfull";
}
else{
    echo "Error encountered while creating table".mysqli_connect_error();
}

?>
