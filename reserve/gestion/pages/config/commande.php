<?php

 function ajoute($image, $nom, $prix, $desc, $lien)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO hotels (image, nom, prix, description, lien) VALUES ('$image', '$nom', '$prix', '$desc', '$lien')");

     $req->execute(array($image, $nom, $prix, $desc, $lien));

     $req->closeCursor();
   }
}

function affiche()
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM hotels ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function supprime($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("DELETE FROM hotels WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}

?>


