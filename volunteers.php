<?php require("./admin/layout/db.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dapp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/assets/images/logo.jpg" class="rounded" height="50px">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/donar" class="nav-link">Donar</a></li>
          <li class="nav-item"><a href="/user" class="nav-link">People-in-Need</a></li>
          <li class="nav-item"><a href="/member" class="nav-link">Member</a></li>
          <li class="nav-item"><a href="/staff" class="nav-link">Staff</a></li>
          <li class="nav-item"><a href="/admin" class="nav-link">Admin</a></li>
          <li class="nav-item active"><a href="#volunteer" class="nav-link">Volunteers Section</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h2 class="heading mb-5">We Need Your Help.</h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <div class="site-section fund-raisers" id="volunteers">
    <div class="container">
      <div class="row mb-3 justify-content-center">
        <div class="col-md-8 text-center">
          <h2>Volunteers Section</h2>
        </div>
      </div>

      <?php
      $mobile=$_POST["mobile"];
      $result = $conn->query("SELECT * FROM vol WHERE mobile='$mobile'");
      if($result->num_rows>0){
      while ($row=$result->fetch_assoc()) {
        ?>
        <p style="font-size:1.2rem;font-weight:600">Name : <span style="color:#f7ca44"><?php echo($row["name"])?></span></p>
        <p style="font-size:1rem;font-weight:600">Mobile : <span style="color:#f7ca44"><?php echo($row["mobile"])?></span></p>
        <p style="font-size:1rem;font-weight:600">Email : <span style="color:#f7ca44"><?php echo($row["email"])?></span></p>
        <p style="font-size:1.2rem;font-weight:600">Hours Collected : <span style="color:#f7ca44"><?php echo($row["hour"])?> hours</span></p>
        <?php
      }}else{
      ?>
        <p style="font-size:1rem;font-weight:600">Volunteer Details Not Found!</p>
    
      <?php } ?>
    </div>
  </div>

  
 <!-- .featured-donate -->

  <footer class="footer">
    <div class="container">
      <div class="row mb-2">
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">About Us</h3>
          <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          <p class="mb-5">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p><a href="#" class="link-underline">Read  More</a></p>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="block-23">
            <h3 class="heading-section">Get Connected</h3>
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Address</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">1234567890</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
              </ul>
            </div>
        </div>
        
        
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>

  <script src="js/jquery.fancybox.min.js"></script>
  
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>