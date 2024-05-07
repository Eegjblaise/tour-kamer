<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Inscription</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nom</label>
            <input type="text" name="fname" placeholder="Nom" required>
          </div>
          <div class="field input">
            <label>Prenom</label>
            <input type="text" name="lname" placeholder="Prenom" required>
          </div>
        </div>
        <div class="field input">
          <label>Address Email </label>
          <input type="text" name="email" placeholder="Entrer l'email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Entrer le password" required>
          <i class="fa fa-eye"></i>
        </div>
        <div class="field image">
          <label>Selectionner une Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input style='background-color:rgb(31, 233, 240);' type="submit" name="submit" value="Inscription">
        </div>
      </form>
      <div class="link">Est vous deja inscrit? <a href="login.php" style='color:rgb(31, 233, 240);' >Connexion</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
