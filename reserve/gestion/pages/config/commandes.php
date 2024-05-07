

<?php

 function ajouter($image, $nom, $desc, $lien)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO site (image, nom, description, lien) VALUES ('$image', '$nom', '$desc', '$lien')");

     $req->execute(array($image, $nom, $desc, $lien));

     $req->closeCursor();
   }
}

function afficher()
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM site ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function supprimer($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("DELETE FROM site WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}

?>
<!--hotel-->

