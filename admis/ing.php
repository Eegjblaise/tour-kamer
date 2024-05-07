<?php
if (isset($_POST['sup'])) {
    $id = $_POST['contact'];
    $con = new mysqli("localhost", "root" ,"","service") or die ;
    $requete = "DELETE FROM contact WHERE id = '$id' ";
    $sql = mysqli_query($con, $requete) or die;
    header("location: home.php") ;
}

if (isset($_POST['update'])) {
    $id = $_POST['id'] ;
    $con = mysqli_connect("localhost", "root", "","service") or die(mysqli_error()) ;
    $db = mysqli_select_db('text') or die(mysqli_error()) ;
    $requete = "UPDATE contact SET WHERE id='$id'  nom = '$nom',  email = '$email', susbject= '$susbject', message= '$message'";
    $sql = mysqli_query($requete, $con) or die(mysqli_error()) ;
    header("location: home.php") ;
}
?>