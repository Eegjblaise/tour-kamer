<?php
    require('connexion.php')
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Description</title>
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

    
	<link rel="icon" href="images/PHOTO/kame.png">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/PHOTO/kame.png" style="border-radius: 20%; height: 60px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
	  <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Accueil</a></li>
          <li class="nav-item "><a href="hotel.php" class="nav-link">Hotels</a></li>
          <li class="nav-item "><a href="tour.php" class="nav-link">Tourisme</a></li>
          <li class="nav-item active"><a href="restau.php" class="nav-link">restaurant</a></li>
          <li class="nav-item"><a href="blog.php" class="nav-link">Actualité </a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">A propos</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item cta"><a href="chat/login.php" class="nav-link"><span>Chat groupe</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/des/k2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Accueil</a></span> <span class="mr-2"><a href="hotel.php">Hotel</a></span> <span>Description</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">restaurant</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar">
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Cherche un restaurant</h3>
        			<form action="#">
        				<div class="fields">
		              <div class="form-group">
					  <input id="searchbar" type="search" onkeyup="search_hotel()" name="search" class="form-control" placeholder="Nom du restaurant">
		              </div>
		             
		            </div>
	            </form>
        		</div>
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">evaluation</h3>
        			<form method="post" class="star-note">
							  <div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">
										<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
									</label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						     </label>
							  </div>
							  <div class="form-check">
							    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
							    </label>
							  </div>
							</form>
        		</div>
          </div>
          <div class="col-lg-9">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<div class="single-slider owl-carousel">
					  <div class="item">
          					<div class="hotel-img" style="background-image: url(images/des/k2.jpg);"></div>
          				</div>
          				<div class="item">
          					<div class="hotel-img" style="background-image: url(images/des/k3.jpg);"></div>
          				</div>
          				<div class="item">
          					<div class="hotel-img" style="background-image: url(images/des/k4.jpg);"></div>
          				</div>
          			</div>
          		</div>
          		<div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
          			<span>Nos meilleurs restaurants </span>
          			<h2>sites au Cameroun</h2>
          			<p class="rate mb-5">
          				<span class="loc"><a href="#"><i class="icon-map"></i></a></span>
          				<span class="star">
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star-o"></i>
    							10 note</span>
    						</p>
    						<p>La Réserve du Dja est une réserve de faune suivant la nomenclature dressée par l’article 24 de la loi sur les forêts. À ce titre, elle fait partie des forêts domaniales, qui relèvent du domaine privé de l’État.</p>
    						
    						
          		</div>
          		<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Video de presentation</h4>
          			<div class="block-16">
		              <figure>
		                <img src="images/des/dja3.jpg" alt="Image placeholder" class="img-fluid">
		                <a href="video/hilton.mp4" class="play-button popup-vimeo"><span class="icon-play"></span></a>
		              </figure>
		            </div>
          		</div>
				  
          		<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Restaurant similaires</h4>
					  
          	<div class="row">
          		<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/stade/lime-jardin.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="hotel-single.php">Chez Wou</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Notes</span>
				    						</p>
			    						</div>
		    						</div>
		    						<p>Vous avez besoin de passer du bon temps entre amie, famille ou en amoureux dans un espace sompteux et cosy, ce restau est le meilleur.</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><img src="images/site/icon.jpg">Restaurant</span>
		    							<span class="ml-auto"><a href="#">Découvrir</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="hotel-single.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurants/Chez-Kalli.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="hotel-single.php">Chez Kalli</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Notes</span>
				    						</p>
			    						</div>
		    						</div>
		    						<p>En ce qui concerne le menu, le restaurant chez kalli mets a votre disposition des plats de la gastronimie camerounaise et internationale.</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><img src="images/site/icon.jpg">Restaurant</span>
		    							<span class="ml-auto"><a href="#">Découvrir</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="hotel-single.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurants/CENTRALE-Beyrouth.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="hotel-single.php">centrale Beyrouth</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Notes</span>
				    						</p>
			    						</div>
		    						</div>
		    						<p>En ce qui concerne le menu, le restaurant la centrale beyrouth mets a votre disposition des plats de la gastronimie camerounaise et internationale.</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><img src="images/site/icon.jpg">Restaurant</span>
		    							<span class="ml-auto"><a href="#">Découvrir</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			
		    			
		    			</div>
          			</div>
          		</div>
          		
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

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
                <li><a href="about.php" class="py-2 d-block">A PROPOS</a></li>
                <li><a href="#" class="py-2 d-block">Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Soutien à la clientèle</h2>
              <ul class="list-unstyled">
                <li><a href="contact.php" class="py-2 d-block">Contact Nous</a></li>
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
  <script src="js/search.js"></script>
    
  </body>
</html>