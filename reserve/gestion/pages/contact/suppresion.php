<?php
if (isset($_POST['sup'])) {
    $id = $_POST['container'];
    $con = new mysqli("localhost", "root" ,"","contact") or die ;
    $requete = "DELETE FROM container WHERE id = '$id' ";
    $sql = mysqli_query($con, $requete) or die;
    header("location: liste.php") ;
}

if (isset($_POST['update'])) {
    $nom = $_POST['nom'] ;
    $id = $_POST['id'] ;
    $con = mysqli_connect("localhost", "root", "","contact") or die(mysqli_error()) ;
    $db = mysqli_select_db('text') or die(mysqli_error()) ;
    $requete = "UPDATE container SET WHERE id='$id' nom = '$nom', email = '$email', susbject = '$susbject', message = '$message' ";
    $sql = mysqli_query($requete, $con) or die(mysqli_error()) ;
    header("location: liste.php") ;
}
?>