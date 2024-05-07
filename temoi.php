
<?php
if(isset($_POST['seng']))
{
  if(isset($_POST['nom']) AND isset($_POST['nationalite']) AND isset($_POST['image']) AND isset($_POST['message']))
  {
  if(!empty($_POST['nom']) AND !empty($_POST['nationalite']) AND !empty($_POST['image']) AND !empty($_POST['message']) )
      {
          $nom = htmlspecialchars(strip_tags($_POST['nom']));
      $nationalite = htmlspecialchars(strip_tags($_POST['nationalite']));
      $image = htmlspecialchars(strip_tags($_POST['image']));
          $message = htmlspecialchars(strip_tags($_POST['message']));
        try 
        {
       ajou($nom, $nationalite, $image, $message);
        } 
        catch (Exception $e) 
        {
            $e->getMessage();
        }

      }
  }
}

?>		