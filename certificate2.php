<?php
    require('fpdf.php');
    if(isset($_POST['submit']))
    {
        
      $font = "opensans.ttf";
      $image = imagecreatefromjpeg("certificate.jpg");
      $color = imagecolorallocate($image,19,21,22);
      $name = $_POST['donorname'];
      $ml = $_POST['donated'];
      $type = $_POST['bloodgrp'];
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
      $pdf = new FPDF('L','in',[11.7,8.27]);
      $pdf-> AddPage();
      $pdf-> Image("certificates/".$name.".jpg",0,0,11.7,8.27);
      $pdf-> Output("certificates/".$name.".pdf","F");
      imagedestroy($image);
      echo "Certificate created"."<br>";  
    }
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title class="heading"> Blood Donation centre </title>
    <link rel='icon' type="image/x-favicon" href="favicon.ico"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<style>

.donor{
background-color: bf0a07;
margin: auto;
width: 60%;
border: 5px solid;
padding: 10px;
}

.form-group{
  margin-left: auto;
  margin-right: auto;
  padding:5px;
  text-align:center;
}

.btn-primary{
  padding:10px;
}
</style>
  </head>
  <body>

    <div class="container main rounded">
    <h1 align="center" class="title" >Certificate Page</h1>
    </div>


    <div class="container donor">
    <form  method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="donorname">Name</label>
          <input type="text" class="form-control" name="donorname" placeholder="Enter your name"> <br><br>
          <label for="donated">Donated </label>
          <input type="number" class="form-control" name="donated" placeholder="amount of blood donated"><br><br>
          <label for="bloodgrp">Bloodgrpoup</label>
          <input type="text" class="form-control" name="bloodgrp" placeholder="Enter blood group"><br><br>
          <input type="submit" name="submit" class="btn btn-primary" value="Generate certificate" >
        </div>
    </form>
    </div>
  </body>
</html> 
