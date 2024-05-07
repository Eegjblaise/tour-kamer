<?php

  require("../config/commandes.php");
  $site=afficher();

?>

<!DOCTYPE html>
<html>
<head>

    <link href="css/bootstrap.min.css" rel="stylesheet">
   
   <script src="js/bootstrap.bundle.min.js" ></script>
   
   <link rel="icon" href="../images/kamer.png">
	<title></title>
</head>
<body>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      	
<form method="post">
  <div class="mb-3">

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Identifiant du site</label>

    <input type="number" class="form-control" name="idsite" required>
  </div>

  <button type="submit" name="valider" class="btn btn-primary">Supprimer le site</button>
</form>

      </div>


         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  
        <?php foreach($site as $site): ?> 
        <div class="col">
          <div class="card shadow-sm"style="width:50%;">
            
            <img src="<?= $site->image ?>" style="width:100%; height:50%;">

            <h3><?= $site->id ?></h3>

            <div class="card-body">
            
            </div>
          </div>
        </div>
  <?php endforeach; ?>

</div>

    </div></div>

    
</body>
</html>

<?php

  if(isset($_POST['valider']))
  {
    if(isset($_POST['idsite']))
    {
    if(!empty($_POST['idsite']) AND is_numeric($_POST['idsite']))
	    {
	    	$idsite = htmlspecialchars(strip_tags($_POST['idsite']));

          try 
          {
            supprimer($idsite);
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }
	    	


	    }
    }
  }

?>