<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "BDC";
        
        //CONNECTION TO DATABASE
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        
        // $conn = mysqli_connect('localhost','root','','BDC');
        if($conn->connect_error)
        {
            die("Connection failed". $conn->connect_error);
        }
        $sql = "SELECT dname , donated , bloodgrp from donor";
        $result = $conn->query($sql);
        if($result->num_rows>0)
        {
            while($row = $result->fetch_assoc())
            {
                $font = "opensans.ttf";
                $image = imagecreatefromjpeg("certificate.jpg");
                $color = imagecolorallocate($image,19,21,22);
                $name = $row['dname'];
                $ml = $row['donated'];
                $type = $row['bloodgrp'];
                $donated = $ml." ml ".$type." blood ";
                $to = "KJ Blood Donation centre";
                $date = "09 APRIL 2022";
                $signature = "KJSCE";
                imagettftext($image,20,0,306,167,$color,$font,$name);
                imagettftext($image,15,0,272,267,$color,$font,$donated);
                imagettftext($image,15,0,261,325,$color,$font,$to);
                imagettftext($image,15,0,105,360,$color,$font,$date);
                imagettftext($image,15,0,406,360,$color,$font,$signature);
                imagejpeg($image,"certificates/".$name.".jpg");
                imagedestroy($image);
                echo "Certificate created"."<br>";
            }
        }
        else
        {
            echo "No Data Found";
        }

?>
