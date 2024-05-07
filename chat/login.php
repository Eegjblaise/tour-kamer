<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Connexion</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email </label>
          <input type="text" name="email" placeholder="Entrer votre Email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Votre password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input style='background-color:rgb(31, 233, 240);'type="submit" name="submit" value="Connexion">
        </div>
      </form>
      <div class="link">Je ne suis pas encore inscrit? <a href="index.php"  style='color:rgb(31, 233, 240);'>Inscription</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
