<?php
    session_start();
	include_once "config.php";
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Actualité</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="icon" href="images/PHOTO/kamer.png">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/PHOTO/kamer.png" style="border-radius: 20%; height: 60px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="index.php" class="nav-link">Accueil</a></li>
          <li class="nav-item"><a href="hotel.php" class="nav-link">Hotels</a></li>
          <li class="nav-item"><a href="tour.php" class="nav-link">Tourisme</a></li>
          <li class="nav-item"><a href="restau.php" class="nav-link">restaurant</a></li>
          <li class="nav-item active"><a href="blog.php" class="nav-link">Actualité </a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">A propos</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item cta"><a href="chat/login.php" class="nav-link"><span>Chat groupe</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/text/vik');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Accueil</a></span> </p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">  d'articles</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20" style="background-image: url('images/text/can1.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<span class="tag">stade olembe cameroun</span>
                <h3 class="heading mt-3"><a href="blog-single.php">il abrite la cérémonie de lancement de la CAN 2021 avec le match Cameroun - Burkina Faso</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">janvier 1/2022 </a></div>
                  <div><a href="#">Admin</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single1.php" class="block-20" style="background-image: url('images/text/hilton.jpg');">
              </a>
              <div class="text p-4">
              	<span class="tag">hotel hilton</span>
                <h3 class="heading mt-3"><a href="blog-single1.php">Situé au centre de la ville, au coeur du quartier des affaires. 248 chambres et suites entièrement équipées</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Admin</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single2.php" class="block-20" style="background-image: url('images/text/bacchus.jpg');">
              </a>
              <div class="text p-4">
              	<span class="tag">restau Bacchus</span>
                <h3 class="heading mt-3"><a href="blog-single2.php">le Café Théâtre Restaurant Le Bacchus est ouvert,pour manger, boire un verre...</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Admin</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single3.php" class="block-20" style="background-image: url('images/text/1.jpg');">
              </a>
              <div class="text p-4">
              	<span class="tag">Musée National Camerounais</span>
                <h3 class="heading mt-3"><a href="blog-single3.php">Le Musée national du Cameroun est logé dans l’ancien palais présidentiel.</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Admin</a></div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Plateforme</h2>
               <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">A PROPOS</a></li>
                <li><a href="#" class="py-2 d-block">Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Soutien à la clientèle</h2>
              <ul class="list-unstyled">
				<li><a href="#" class="py-2 d-block">Mode de payement</a></li>
                <li><a href="#" class="py-2 d-block">Contact Nous</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Avez vous une Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+237 652589842</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">GauthierEkani9@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
 En &copy;<script>document.write(new Date().getFullYear());</script> venez visiter le Cameroun dans toute sa splendeur  <i class="icon-heart" aria-hidden="true" style="color: brown;"></i><a href="https://colorlib.com" target="_blank"></a>
  </p>
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
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>