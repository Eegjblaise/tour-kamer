<?php

  require("../config/commandes.php");

?>

<!DOCTYPE html>
<html>
<head>

   <title>administrateur</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    <link rel="icon" href="../images/kamer.png">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
    
  
   
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container" >
      <a class="navbar-brand" href="http://localhost/test/projet1/VISITE/index.php"><img src="../images/kamer.png"></a>
      <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
   
  </nav>
  </head>
  
<body>

  <div class="album py-5 bg-light">
    <div class="container" style="margin-left:200px; margin-top:100px;">
      <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form method="POST" >
              <div class="form-group">
                <input type="text" class="form-control" name="image" placeholder="image du site">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="nom" placeholder="nom du site">
              </div>
              <div class="form-group">
                <input type="text" name="lien" class="form-control" placeholder="lien">
              </div>
              <div class="form-group">
                <textarea name="desc" id="" cols="30" rows="7" class="form-control" placeholder="description du site"></textarea>
              </div>
              <div class="form-group">
                <input type="submit"  name="valider" value="Envoyer" class="btn btn-primary py-3 px-5">
              </div>
            </form>
            </div>
          </div>
</body>
</html>


<?php

  if(isset($_POST['valider']))
  {
    if(isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['desc']) AND isset($_POST['lien']))
    {
    if(!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['desc']) AND !empty($_POST['desc']) )
	    {
	    	$image = htmlspecialchars(strip_tags($_POST['image']));
	    	$nom = htmlspecialchars(strip_tags($_POST['nom']));
	    	$desc = htmlspecialchars(strip_tags($_POST['desc']));
        $lien = htmlspecialchars(strip_tags($_POST['lien']));
          try 
          {
            ajouter($image, $nom, $desc, $lien);
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }

	    }
    }
  }

?>