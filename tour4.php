<?php
    require('connexion.php')
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tourisme</title>
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
          <li class="nav-item"><a href="hotel.php" class="nav-link">Hotels</a></li>
          <li class="nav-item active"><a href="tour.php" class="nav-link">Tourisme</a></li>
          <li class="nav-item"><a href="restau.php" class="nav-link">restaurant</a></li>
          <li class="nav-item"><a href="blog.php" class="nav-link">Actualité </a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">A propos</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item cta"><a href="chat/login.php" class="nav-link"><span>Chat groupe</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/font/ecot.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Accueil</a></span> <span>Tour</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Destination</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar">
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Cherche un site</h3>
					<form action="#">
        				<div class="fields">
		              <div class="form-group">
					  <input id="searchbar" type="search" onkeyup="search_hotel()" name="search" class="form-control" placeholder="Nom du site">>
		              </div>
		            </div>
	            </form>
        		</div>
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">evaluation</h3>
        			<form method="post" class="star-rating">
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
				    						<h3><a href="#">jardin de limbe</a></h3>
				    						
			    						</div>
			    						<div class="two">
			    							<span class="price"></span>
		    							</div>
		    						</div>
		    						<p>il est le premier jardin botanique du Cameroun. il a ete cree en 1892, sous l'ere coloniale allemande, a victoria</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><img src="images/site/icon.jpg">Tourisme</span> 
		    							<span class="ml-auto"><a href="#">Découvrir</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/stade/parc-mont-ca.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Parc Mont Cameroun</a></h3>
				    						
			    						</div>
			    						<div class="two">
			    							<span class="price"></span>
		    							</div>
		    						</div>
		    						<p>Situe dans le sud ouest du pays, non loin de Buea le parc du mont cameroun.</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><img src="images/site/icon.jpg">Tourisme</span> 
		    							<span class="ml-auto"><a href="#">Découvrir</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/stade/Le-parc-national-de-Waza.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Parc de Waza</a></h3>
				    						
			    						</div>
			    						<div class="two">
			    							<span class="price"></span>
		    							</div>
		    						</div>
		    						<p>Situe dans l'extreme nord du pays, non loin ddu lac Tchad, pres de Waza. il fait partie des parcs nationaux du Cameroun.</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><img src="images/site/icon.jpg">Tourisme</span> 
		    							<span class="ml-auto"><a href="#">Découvrir</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/stade/image3.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Stade japoma</a></h3>
				    						
			    						</div>
			    						<div class="two">
			    							<span class="price"></span>
		    							</div>
		    						</div>
		    						<p>Le japoma Stadium est un stade de football situe a Douala, au Cameroun. Il a accueillir la coupe d'Afrique des nations 2021.</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><img src="images/site/icon.jpg">Tourisme</span> 
		    							<span class="ml-auto"><a href="#">Découvrir</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/text/can1.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Stade Olembe</a></h3>
				    						
			    						</div>
			    						<div class="two">
			    							<span class="price"></span>
		    							</div>
		    						</div>
		    						<p>Le stade d'Olembe est un stade de football situe a Olembe, un quartier au Nord de yaounde, la capitale politique de cameroun.</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><img src="images/site/icon.jpg">Tourisme</span> 
		    							<span class="ml-auto"><a href="#">Découvrir</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/stade/stadiumamadou.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Ahmadou Ahidjo stadium</a></h3>
				    						
			    						</div>
			    						<div class="two">
			    							<span class="price"></span>
		    							</div>
		    						</div>
		    						<p>Le satde Ahmadou Ahidjo est un stade omnisports situe a yaounde au cameroun.</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
									<span><img src="images/site/icon.jpg">Tourisme</span>
		    							<span class="ml-auto"><a href="#">Découvrir</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
          	</div>
          	<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li><a href="tour4.php">&lt;</a></li>
		                <li><a href="tour">1</a></li>
		                <li><a href="tour1.php">2</a></li>
		                <li><a href="tour2.php">3</a></li>
		                <li><a href="tour3.php">4</a></li>
						<li class="active"><span>5</span></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
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
  <script src="js/range.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="js/search.js"></script>
  
  </body>
</html>