<?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
          $inputDID=$_POST['inputDID'];
          $inputName=$_POST['inputName'];
          $inputAadhar=$_POST['inputAadhar'];
          $inputPhone=$_POST['inputPhone'];
          $inputBlood=$_POST['inputBlood'];
          $inputGender=$_POST['inputGender'];
          $inputAge=$_POST['inputAge'];
          $inputAddress=$_POST['inputAddress'];
          $inputWeight=$_POST['inputWeight'];
          $inputHeight=$_POST['inputHeight'];
          $inputdonated=$_POST['inputdonated'];


        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "BDC";

       // Create a connection
       $conn = mysqli_connect($servername, $username, $password, $database);
       // // Die if connection was not successful
       // if (!$conn){
       //     die("Sorry we failed to connect: ". mysqli_connect_error());
       // }
       // else{
       //       echo "Connection succesfull<br>";
       // }
         $sql = "INSERT INTO `donor`(`DID`, `dname`, `daadhar`, `dphone`, `bloodgrp`, `dgender`, `dage`, `daddress`, `weight`, `height`, `donated`) VALUES ('$inputDID','$inputName','$inputAadhar','$inputPhone','$inputBlood','$inputGender','$inputAge','$inputAddress','$inputWeight','$inputHeight','$inputdonated')";
         $result = mysqli_query($conn, $sql);

         if($result){
           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Success!</strong> Your entry has been submitted successfully!
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">×</span>
           </button>
         </div>';
         }
         else{
             // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
             echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">×</span>
           </button>
         </div>';
         }

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
  <body bgcolor="#f70400">
  <div class="container main rounded" >
  <h1  align="center" class=" title">Blood Donation Centre</h1>
  <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
  <a class="navbar-brand" href="#">BDC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#learnmore">Learn More</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footer">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="donorinsert.php">Donate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nursedetails.php">Nurses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="volunteerdetails.php">Volunteer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="certificate.php">Certificate</a>
      </li>

    </ul>
  </div>
</nav>

<h2 align="center" class=" title">Donor Entry Form</h2>

    <div class="container main rounded">
    <form action="donorinsert.php" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="DID">Donor ID</label>
          <input type="number" class="form-control" name="inputDID" placeholder="Enter donor ID">
        </div>
        <div class="form-group col-md-6">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" name="inputName" placeholder="Enter your name">
        </div>
        <div class="form-group col-md-6">
          <label for="inputAadhar">Aadhar No.</label>
          <input type="number" class="form-control" name="inputAadhar" placeholder="Enter your aadhar number">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPhone">Phone Number</label>
          <input type="number" class="form-control" name="inputPhone" placeholder="Enter your phone number">
        </div>
        <div class="form-group col-md-6">
          <label for="inputBlood">Blood Group</label>
          <input type="text" class="form-control" name="inputBlood" placeholder="Enter your blood group">
        </div>
        <div class="form-group col-md-6">
          <label for="inputGender">Gender</label>
          <input type="text" class="form-control" name="inputGender" placeholder="Enter your gender">
        </div>
        <div class="form-group col-md-6">
          <label for="inputAge">Age</label>
          <input type="number" class="form-control" name="inputAge" placeholder="Enter your age">
        </div>
        <div class="form-group col-md-6">
          <label for="inputWeight">Weight</label>
          <input type="number" class="form-control" name="inputWeight" placeholder="Enter your weight">
        </div>
        <div class="form-group col-md-6">
          <label for="inputHeight">Height</label>
          <input type="number" class="form-control" name="inputHeight" placeholder="Enter your height">
        </div>
        <div class="form-group col-md-6">
          <label for="inputdonated">Donated</label>
          <input type="number" class="form-control" name="inputdonated" placeholder="Enter the amount of blood donated">
        </div>
      <div class="form-group ">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" name="inputAddress" placeholder="1234 Main St"><br><br>
        <button type="submit" class="btn btn-primary"  >Sign in</button>
      </div>

    </form>
    </div>
    

    <footer class="page-footer font-small blue pt-4" id="footer">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-3 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase">Footer Content</h5>
      <p>WPL-RDBMS Mini-Project, Sem4</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Rohan Dsouza</h5>

      <ul class="list-unstyled">
        <li>
          <a href="https://instagram.com/rohan_dsouza_02?igshid=YmMyMTA2M2Y=" target="_blank">Instagram</a>
        </li>
        <li>
          <a href="tel:+919082385263">Phone Number</a>
        </li>
        <li>
          <a href="">Github</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Vinod Ghanchi</h5>

      <ul class="list-unstyled">
        <li>
          <a href="https://instagram.com/vinod_ghanchi?igshid=YmMyMTA2M2Y=" target="_blank">Instagram</a>
        </li>
        <li>
          <a href="tel:+919372222626">Phone Number</a>
        </li>
        <li>
          <a href="https://github.com/Vinod-Ghanchi" target="_blank">Github</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Kaushik Iyer</h5>

      <ul class="list-unstyled">
        <li>
          <a href="https://instagram.com/iyerkaushik?igshid=YmMyMTA2M2Y=" target="_blank">Instagram</a>
        </li>
        <li>
          <a href="tel:+917045029282">Phone Number</a>
        </li>
        <li>
          <a href="https://github.com/Kaushik-Iyer">Github</a>
        </li>
      </ul>

    </div>
  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2022 Copyright:
  <p href="/">Rohan,Vinod, and Kaushik</p>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
  <button class="myBtn"><a href="#top" style="color: Black">Top</a></button>
  </div>
  </body>
</html>
