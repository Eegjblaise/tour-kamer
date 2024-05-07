<?php

 function ajoutarge($image, $nom, $nationalite, $temoignage)

{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO temoignage (image,nom, nationalite,temoignage) VALUES ('$image', '$nom', '$nationalite','$temoignage')");

     $req->execute(array($image, $nom, $nationalite, $temoignage));

     $req->closeCursor();
   }
}

function affic ()
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM temoignage ORDER BY idtemoi DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}


?>


<?php
if(isset($_POST['seng']))
{
  if(isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['nationalite']) AND isset($_POST['temoignage']))
  {
  if(!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['nationalite']) AND !empty($_POST['temoignage']) )
      {
          $image = htmlspecialchars(strip_tags($_POST['image']));
      $nom = htmlspecialchars(strip_tags($_POST['nom']));
      $nationalite = htmlspecialchars(strip_tags($_POST['nationalite']));
          $temoignage = htmlspecialchars(strip_tags($_POST['temoignage']));
        try 
        {
       ajoutarge($image, $nom, $nationalite, $temoignage);
        } 
        catch (Exception $e) 
        {
            $e->getMessage();
        }

      }
  }
}

?>		




