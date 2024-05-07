<?php

 function ajouter($nom, $email, $susbject, $message)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO contact (nom, email, 	susbject, message) VALUES ('$nom', '$nom', '$susbject', '$message')");

     $req->execute(array($nom, $email, $susbject, $message));

     $req->closeCursor();
   }
}




?>

