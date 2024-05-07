<?php require_once "./../controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<?php

require("./../config/command.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../images/kamer.png">
  <title>
    enregistrer un restaurant
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
</head>

<body class="">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">

        <li class="nav-item d-flex align-items-center">
          <a class="btn btn-round btn-sm mb-0 btn-outline-white me-2" target="_blank" style="background-color:red;" href="supprimer.php">Supprimer un restaurant</a>
        </li>
        <ul class="navbar-nav d-lg-block d-none">
          <li class="nav-item">
            <a href="http://localhost/visite/reserve/gestion/pages/home.php"  class="btn btn-sm btn-round mb-0 me-1 bg-gradient-light"> page precedente</a>
          </li>
        </ul>
    </div>
  </nav>
  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <section class="min-vh-100 mb-8">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../images/img41.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
             <h1 class="text-white mb-2 mt-5"> <marquee>Bienvenue a vous !</marquee> <br> M. <?php echo $fetch_info['name'] ?></h1>
              <p class="text-lead text-white">Ici vous pouvez effectuer l'enregistrement d'un restaurant de votre choix!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <h5>Enregistrer un hotel</h5>
              </div>
              <div class="row px-xl-5 px-sm-4 px-3">
                <div class="col-3 ms-auto px-1">
                  
                </div>
               
            
              </div>
              <div class="card-body" >
              <form method="POST" >
              <div class="form-group">
                <input type="text" class="form-control" name="image" placeholder="image de restau">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="nom" placeholder="nom de restau">
              </div>
              <div class="form-group">
                <input type="text" name="lien" class="form-control" placeholder="lien">
              </div>
              <div class="form-group">
                <textarea name="desc" id="" cols="30" rows="7" class="form-control" placeholder="description de restau"></textarea>
              </div>
              <div class="form-group">
              <button class="btn btn-primary" name="valider"  >enregistrer un restaurant</button>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>

<?php

  if(isset($_POST['valider']))
  {
    if(isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['desc']) AND isset($_POST['lien']))
    {
    if(!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['desc']) AND !empty($_POST['lien']) )
	    {
	    	$image = htmlspecialchars(strip_tags($_POST['image']));
	    	$nom = htmlspecialchars(strip_tags($_POST['nom']));
	    	$desc = htmlspecialchars(strip_tags($_POST['desc']));
        $lien = htmlspecialchars(strip_tags($_POST['lien']));
          try 
          {
            ajou($image, $nom,  $desc, $lien);
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }

	    }
    }
  }

?>
</body>

</html>