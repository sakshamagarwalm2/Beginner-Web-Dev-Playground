<?php

include 'connect.php';

if(isset($_POST['submit'])){
  $disease=$_POST['disease'];
  $solution=$_POST['solution'];
  $links=$_POST['links'];

  //query

  $sql="insert into `aurveda` (Disease,Solution,Links) values ('$disease','$solution','$links')";

  $result=mysqli_query($con,$sql);
  if($result){
    header('location:index.php');
  }else{
    die(mysql_error("Error"));
  }


}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADD-DATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
</head>

<body>
  
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #ddb49790!important;">
<div><img src="public/nav.png" width="10%" style="z-index:3;right:0;position:absolute;opacity:90%; margin:0;"></div>
  <div class="container" style="display:flex; justify-content:space-evenly;">
    <a class="navbar-brand" href="#"width="auto"><img src="public/logo.png" alt="logo" width="50px"></a><h3 class="my-3">PROJECT<span class="text-danger">AR.</span></h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav" style="display:flex; justify-content:space-evenly; width:40%; float:right;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search.php">Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add.php">Add-Data</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
    <div class="container my-5">
      <form method="post" >
        <div class="mb-3">
            <label class="form-label">Disease</label>
            <input type="text" class="form-control"  placeholder="Enter" name="disease" autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">Solution</label>
            <input type="text" class="form-control"  placeholder="Enter" name="solution" autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">Links</label>
            <input type="text" class="form-control"  placeholder="Enter" name="links" autocomplete="off">
        </div>
        <button class="btn btn-dark my-3" name="submit">Submit</button>
        </form>
    </div>
    
    <div class="container text-center">
        <img src="public/b-logo.png" width="70%" style="border-radius:5px;">
    </div>
<hr class="my-4">
    <footer class="site-footer" style="margin-top:10px">
    <div><img src="public/nav.png" width="20%" style="z-index:3;right:0;position:absolute;opacity:90%; margin:0;"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>PROJECT-<span class="text-danger">AR.</span></h6>
            <p class="text-justify">Ayurveda, India's traditional medicine, offers a holistic approach to wellness. We explore natural solutions and personalized treatments to empower your health journey. Join us to revive this ancient wisdom for a healthier you!</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Conntact Us</h6>
            <ul class="footer-links">
              <li><a href="#">Whatsapp</a></li>
            </ul>
          </div>

          
          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="index.php">Home</a></li>
              <li><a href="search.php">Search</a></li>
              <li><a href="add.php">Add-Data</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="text-center">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">HKRM.</a>.
            </p>
          </div>
        </div>
      </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  

</body>

</html>