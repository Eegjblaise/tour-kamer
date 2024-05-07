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

  require("../config/command.php");
  $restaurant=affich();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../images/kamer.png">
  <title>
    supprimer un hotel
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
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="../pages/home.php">
        Tableau de bord
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
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
              <p class="text-lead text-white">Ici vous pouvez effectuer des suppression d'hotel de votre choix!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <h5>Supprimer un hotel</h5>
              </div>
              
              <div class="card-body" >
      	
      <form method="post" >
  

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Identifiant du restaurant</label>
    <div>
    <input type="number" class="form-control" name="idrestaurant" required>
    </div>
    <div style="margin-top:10px;">
    <button class="btn btn-primary" name="valid">supprimer</button>
    </div>
    </form>
         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  
        <?php foreach($restaurant as $restaurant): ?> 
        <div class="col">
          <div class="card shadow-sm"style="width:50%;">
            
            <img src="<?= $restaurant->image ?>" style="width:100%; height:50%;">

            <h3><?= $restaurant->id ?></h3>

            <div class="card-body">
            
            </div>
          </div>
        </div>
  <?php endforeach; ?>

</div>

    </div></div>

    
</body>
</html>

<?php

  if(isset($_POST['valid']))
  {
    if(isset($_POST['idrestaurant']))
    {
    if(!empty($_POST['idrestaurant']) AND is_numeric($_POST['idrestaurant']))
	    {
	    	$idrestaurant = htmlspecialchars(strip_tags($_POST['idrestaurant']));

          try 
          {
            supprim($idrestaurant);
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }
	    	


	    }
    }
  }

?>