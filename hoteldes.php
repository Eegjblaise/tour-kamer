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
      <a class="navbar-brand" href="index.php"><img src="images/PHOTO/kamer.png" style="border-radius: 20%; height: 60px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
	  <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Accueil</a></li>
          <li class="nav-item active"><a href="hotel.php" class="nav-link">Hotels</a></li>
          <li class="nav-item"><a href="tour.php" class="nav-link">Tourisme</a></li>
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
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/descrip/mont-febe/Hotel.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Accueil</a></span> <span class="mr-2"><a href="hotel.php">Hotel</a></span> <span>Description</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hotels Mont febe</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar">
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Cherche l'hotel</h3>
        			<form action="#">
        				<div class="fields">
		              <div class="form-group">
		                <input type="text" class="form-control" placeholder="Nom de l'hotel">
		              </div>
		              <div class="form-group">
		              	
		              </div>
		              <div class="form-group">
		                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
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
          					<div class="hotel-img" style="background-image: url(images/descrip/mont-febe/hotel1.jpg);"></div>
          				</div>
          				<div class="item">
          					<div class="hotel-img" style="background-image: url(images/descrip/mont-febe/bar1.jpg);"></div>
          				</div>
          				<div class="item">
          					<div class="hotel-img" style="background-image: url(images/descrip/mont-febe/sport.jpg);"></div>
          				</div>
          			</div>
          		</div>
          		<div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
          			<span>Nos meilleurs hôtels &amp; chambres</span>
          			<h2>Hôtel de luxe au Cameroun</h2>
          			<p class="rate mb-5">
          				<span class="loc"><a href="#"><i class="icon-map"></i> </a></span>
          				<span class="star">
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							note</span>
								</p>
    						<p>Surplombant l’une des sept collines de la ville de Yaoundé, l’Hôtel Mont Fébé Est situé à une altitude de 950 m entouré d’une végétation luxuriante. L’hôtel a une architecture et un design uniques offrant luxe et confort avec des installations modernes. Les chambres offrent une vue magnifique et sont face aux montagnes, au golf ou à la ville de yaoundé</p>
    						<div class="d-md-flex mt-5 mb-5">
    							<ul>
	    							<li>H Mont Febe Cet hôtel 5 étoiles est situé sur une colline</li>
	    							<li> il offre une vue sur le somptueux</li>
	    							<li>club de golf et sur la ville de Yaoundé </li>
	    							<li> Il dispose de 3 piscines extérieures ainsi que de 2 courts d'eau </li>
	    						</ul>
	    						<ul class="ml-md-5">
	    							<li>Les caractéristiques et l'infrastructure d'Hotel Mont Febe</li>
	    							<li>Les personnes voyageant en voiture disposeront d'une place de parking</li>
	    							<li>Pour se reposer on peut réserver un sauna à tout moment</li>
	    						</ul>
    						</div>
    						<p>
NB: Situé dans une zone sécurisée, à 5 minutes de l’ambassade des États-Unis et de la présidence de la République.
</p>
          		</div>
          		<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Video de presentation</h4>
        			<div class="block-16">
		              <figure>
		                <img src="video/film.png" alt="Image placeholder" class="img-fluid">
		                <a href="video/vita.mp4" class="play-button popup-vimeo"><span class="icon-play"></span></a>
		              </figure>
		            </div>
          		</div>
          		<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Nos chambres</h4>
          			<div class="row">
          				<div class="col-md-4">
				    				<div class="destination">
				    					<a href="#" class="img img-2" style="background-image: url(images/descrip/mont-febe/chambre2.jpg);"></a>
				    					<div class="text p-3">
				    						<div class="d-flex">
				    							<div class="one">
						    						<h3><a href="#">Chambre</a></h3>
						    						<p class="rate">
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<span>8 note</span>
						    						</p>
					    						</div>
					    						<div class="two">
					    							<span class="price per-price"><br><small>/nuit</small></span>
				    							</div>
				    						</div>
				    						<p>Chambres et suites sombres (certains avec balcon).</p>
				    						<hr>
				    						<p class="bottom-area d-flex">
				    							<span><img src="images/site/icon.jpg">Mont fébé</span>   
				    							<span class="ml-auto"><a href="#">reserve</a></span>
				    						</p>
				    					</div>
				    				</div>
				    			</div>
				    			<div class="col-md-4">
				    				<div class="destination">
				    					<a href="#" class="img img-2" style="background-image: url(images/descrip/mont-febe/chambre11.jpg);"></a>
				    					<div class="text p-3">
				    						<div class="d-flex">
				    							<div class="one">
						    						<h3><a href="#">Chambre</a></h3>
						    						<p class="rate">
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star-o"></i>
						    							<span>8 note</span>
						    						</p>
					    						</div>
					    						<div class="two">
					    							<span class="price per-price"><br><small>/nuit</small></span>
				    							</div>
				    						</div>
				    						<p>Chambres et suites sombres (certains avec balcon).</p>
				    						<hr>
				    						<p class="bottom-area d-flex">
				    							<span><img src="images/site/icon.jpg"> Mont fébé</span>   
				    							<span class="ml-auto"><a href="#">reserve</a></span>
				    						</p>
				    					</div>
				    				</div>
				    			</div>
				    			<div class="col-md-4">
				    				<div class="destination">
				    					<a href="#" class="img img-2" style="background-image: url(images/descrip/mont-febe/chambre5.jpg);"></a>
				    					<div class="text p-3">
				    						<div class="d-flex">
				    							<div class="one">
						    						<h3><a href="#">Chambre</a></h3>
						    						<p class="rate">
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star-o"></i>
						    							<span>8 note</span>
						    						</p>
					    						</div>
					    						<div class="two">
					    							<span class="price per-price"><br><small>/nuit</small></span>
				    							</div>
				    						</div>
				    						<p>Chambres et suites sombres (certains avec balcon).</p>
				    						<hr>
				    						<p class="bottom-area d-flex">
				    							<span><img src="images/site/icon.jpg"> Mont fébé</span>   
				    							<span class="ml-auto"><a href="#">reserve</a></span>
				    						</p>
				    					</div>
				    				</div>
				    			</div>
          			</div>
          		</div>
          		<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-5">Voir la Disponibilités &amp; Réservé</h4>
          			<div class="fields">
          				<div class="row">
          					<div class="col-md-6">
				              <div class="form-group">
				                <input type="text" class="form-control" placeholder="Nom">
				              </div>
			              </div>
			              <div class="col-md-6">
				              <div class="form-group">
				                <input type="text" class="form-control" placeholder="Email">
				              </div>
			              </div>
			              <div class="col-md-6">
				              <div class="form-group">
				                <input type="text" id="checkin_date" class="form-control" placeholder="Date d'arriver">
				              </div>
			              </div>
			              <div class="col-md-6">
				              <div class="form-group">
				                <input type="text" id="checkin_date" class="form-control" placeholder="Date de depart">
				              </div>
				            </div>
				            <div class="col-md-6">
					            <div class="form-group">
				                <div class="select-wrap one-third">
			                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    <select name="" id="" class="form-control" placeholder="Guest">
			                      <option value="0">Invite</option>
			                      <option value="1">1</option>
			                      <option value="2">2</option>
			                      <option value="3">3</option>
			                      <option value="4">4</option>
			                    </select>
			                  </div>
				              </div>
			              </div>
			              <div class="col-md-6">
					            <div class="form-group">
				                <div class="select-wrap one-third">
			                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    <select name="" id="" class="form-control" placeholder="Children">
			                      <option value="0">Enfant</option>
			                      <option value="1">1</option>
			                      <option value="2">2</option>
			                      <option value="3">3</option>
			                      <option value="4">4</option>
			                    </select>
			                  </div>
				              </div>
			              </div>
				            <div class="col-md-12">
				              <div class="form-group">
				                <input type="submit" value="voir les Disponibilités" class="btn btn-primary py-3">
				              </div>
			              </div>
		              </div>
		            </div>
          		</div>
          		<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">examen &amp; notes</h4>
          			<div class="row">
          				<div class="col-md-6">
          					<form method="post" class="star-note">
										  <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 notes</span></p>
												</label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 notes</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 notes</span></p>
									     </label>
										  </div>
										  <div class="form-check">
										    <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 notes</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 notes</span></p>
										    </label>
										  </div>
										</form>
          				</div>
          			</div>
          		</div>
          		<div class="col-md-12 hotel-single ftco-animate mb-5 mt-5">
          			<h4 class="mb-4">hôtels similaires</h4>
          			<div class="row">
          				<div class="col-md-4">
				    				<div class="destination">
				    					<a href="hoteldes2.php" class="img img-2" style="background-image: url(images/hotels/maimg1.jpg);"></a>
				    					<div class="text p-3">
				    						<div class="d-flex">
				    							<div class="one">
						    						<h3><a href="hoteldes2.php">Hilton</a></h3>
						    						<p class="rate">
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star-o"></i>
						    							<span>8 note</span>
						    						</p>
					    						</div>
					    						<div class="two">
					    							<span class="price per-price">239118F<br><small>/nuit</small></span>
				    							</div>
				    						</div>
				    						<p>Situe au coeur du quartier des affaires, hilton est situe a 5km de l'aeroport.</p>
				    						<hr>
				    						<p class="bottom-area d-flex">
				    							<span><img src="images/site/icon.jpg">Hotel</span>   
				    							<span class="ml-auto"><a href="hoteldes2.php">reserve</a></span>
				    						</p>
				    					</div>
				    				</div>
				    			</div>
				    			<div class="col-md-4">
				    				<div class="destination">
				    					<a href="hoteldes4.php" class="img img-2" style="background-image: url(images/hotels/KRISTAL.png);"></a>
				    					<div class="text p-3">
				    						<div class="d-flex">
				    							<div class="one">
						    						<h3><a href="hoteldes4.php">Kristal</a></h3>
						    						<p class="rate">
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star-o"></i>
						    							<span>8 note</span>
						    						</p>
					    						</div>
					    						<div class="two">
					    							<span class="price per-price">115200F<br><small>/nuit</small></span>
				    							</div>
				    						</div>
				    						<p>Notre hotel est situe au coeur du quartier des affaires Akwa a Douala.</p>
				    						<hr>
				    						<p class="bottom-area d-flex">
				    							<span><img src="images/site/icon.jpg">Hotel</span>   
				    							<span class="ml-auto"><a href="#">reserve</a></span>
				    						</p>
				    					</div>
				    				</div>
				    			</div>
				    			<div class="col-md-4">
				    				<div class="destination">
				    					<a href="hoteldes3.php" class="img img-2" style="background-image: url(images/hotels/imf.jpg);"></a>
				    					<div class="text p-3">
				    						<div class="d-flex">
				    							<div class="one">
						    						<h3><a href="hoteldes3.php">Akwa</a></h3>
						    						<p class="rate">
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star-o"></i>
						    							<span>8 note</span>
						    						</p>
					    						</div>
					    						<div class="two">
					    							<span class="price per-price">68385F<br><small>/nuit</small></span>
				    							</div>
				    						</div>
				    						<p>Hotel convivial avec chambres et suites sobres piscine exterieure dans la capitale economique.</p>
				    						<hr>
				    						<p class="bottom-area d-flex">
				    							<span><img src="images/site/icon.jpg">Hotel</span>   
				    							<span class="ml-auto"><a href="#">reserve</a></span>
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