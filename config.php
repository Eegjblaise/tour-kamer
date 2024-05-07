<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "service";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Base de donne n'est pas connecter".mysqli_connect_error();
  }

  if(isset($_POST['send'])) {

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $susb = $_POST['susbject'];
    $message = $_POST['message'];

   $con = mysqli_connect("localhost", "root", "", "service") or die;
   $sql = "  INSERT INTO contact (nom, email, susbject, message)
   VALUES('$nom','$email','$susb,'$message') ";
   $requete = mysqli_query($con, $sql ) or die("Le toto est ".$nom) ;

}
  
?>