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
$sql = "CREATE TABLE `bdc`.`volunteers` ( `vid` INT NOT NULL , `vname` VARCHAR(100) NOT NULL , `vage` INT NOT NULL , `vgender` VARCHAR(5) NOT NULL , `vaadhar` BIGINT(8) NOT NULL , `vphone` BIGINT(10) NOT NULL , PRIMARY KEY (`vid`), UNIQUE (`vname`), UNIQUE (`vaadhar`), UNIQUE (`vphone`)) ENGINE = InnoDB";


$result= mysqli_query($conn,$sql);
if($result){
    echo "Table creation successfull";
}
else{
    echo "Error encountered while creating table".mysqli_connect_error();
}

?>
