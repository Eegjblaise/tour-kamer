


    <?php

require("confi/commandes.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Chat groupe</title>

  <!-- Favicons -->
  <link href="images/PHOTO/kame.png  " rel="icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/fancybox/jquery.fancybox.css" rel="stylesheet" />
  <link href="./style.css" rel="stylesheet">
  <link rel="icon" href="images/PHOTO/kame.png">
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/chart-master/Chart.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  </head>
  
</head>
<body>

  <div class="wrapper">
    <section class="ftco-section contact-section ftco-degree-bg">
      <header style="text-align:center;">Boite de messagerie</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nom</label>
            <input type="text" name="fname" placeholder="Nom" required>
          </div>
          <div class="field input">
            <label >Prenom</label>
            <input type="text" name="lname" placeholder="Prenom" required>
          </div>
        </div>
        <div class="field input">
          <label>Adress Email</label>
          <input type="text" name="email" placeholder="Entrer votre email" required>
        </div>
        <div class="field input">
          <label>Mot de pass</label>
          <input type="password" name="password" placeholder="Entrer un mot de pass" required>
          <i class="fa fa-eye"></i>
        </div>
        <div class="field image">
          <label>Selection d'image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Inscription">
        </div>
      </form>
      <div class="link">inscrivez vous pour laisser un commentaire<a href="login.php" style="color:#37cbdf;">Connexion</a></div>
    </section>
  </div>
  <script src="javascript/jquery.js"></script>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>