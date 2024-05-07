<?php  
        if(isset($_POST['send'])) {

            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $susbject = $_POST['susbject'];
            $message = $_POST['message'];

           $con = mysqli_connect("localhost", "root", "", "service") or die;
           $sql = "  INSERT INTO contact(nom, email, susbject, message)
           VALUES('$nom','$email','$susbject','$message') ";
           $requete = mysqli_query($con, $sql ) or die("Le toto est ".$nom) ;
           header("location: http://localhost/visite/contact.php") ;

        }
    
?>

