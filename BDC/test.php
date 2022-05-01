<?php

// compares values entered in login page form with mySQL database, and then directs either to protected page or to a failure page
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $dn = $_POST['donorname'];
// $pw = trim($_POST['password']);

    $link = mysqli_connect ('localhost', 'root', '', 'BDC');



// if $fn and $pw match a record, then display page, else display failure page

$query = "SELECT dname FROM donor WHERE (dname = '$dn')";

$result = mysqli_query ($link,$query);
if (mysqli_num_rows($result) == 1) {
print 'Good to go' ;
} else {
print 'Sorry, this login is invalid' ;
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
    
<footer class="page-footer font-small blue pt-4">

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
          <a href="#!">Instagram</a>
        </li>
        <li>
          <a href="#!">Phone Number</a>
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
          <a href="#!">Instagram</a>
        </li>
        <li>
          <a href="#!">Phone Number</a>
        </li>
        <li>
          <a href="#!">Link 3</a>
        </li>
        <li>
          <a href="#!">Link 4</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Kaushik Iyer</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">Instagram</a>
        </li>
        <li>
          <a href="#!">Phone Number</a>
        </li>
        <li>
          <a href="#!">Link 3</a>
        </li>
        <li>
          <a href="#!">Link 4</a>
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
  </body>
</html> 