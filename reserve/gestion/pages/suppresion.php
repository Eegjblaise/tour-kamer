
<?php
     
     if (isset($_POST['sup'])) {
        $Id = $_POST['id'] ;
        $con = new mysqli("localhost", "root", "", "service") or die(mysqli_error()) ;
        $con = mysqli_connect("localhost", "root", "", "service") or die(mysqli_error()) ;
        $requete = " DELETE FROM contact WHERE id = '$Id'  " ;        
        $sql = mysqli_query($con, $requete) or die ;
        header('location: home.php');
     
    }
    
    if (isset($_POST['sign'])) {
        $Id = $_POST['id'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $susbject = $_POST['susbject'];
        $message = $_POST['message'];
       
        $con = new mysqli("localhost", "root", "", "service") or die ;
        $requete = " UPDATE contact SET nom ='$nom', email = '$email',susbject = '$susbject',message = '$message' WHERE id ='$Id' " ;
        //die($requete) ;
        $sql = mysqli_query($con, $requete) or die ;
        
     
    }