<?php require_once "controllerUserData.php"; ?>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?></title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="vendor/datatables/dataTables.bootstrap4.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    body{
	margin: 0 auto;
	background-image: url("bg.jpeg");
    
}
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        font-family: 'Poppins', sans-serif;
    } 
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500;
    }
    button a{
        color: #6665ee;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }
    h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
        color:white;
    }
    .color{
        color:black;
        background-color:white;
    }
    

    </style>
    <link rel="icon" href="kamer.png">
    <script>
        .tr{
            margin: 10px;
        }
    </script>
</head>
<body class="bg-img">
    <nav class="navbar" style="background-color:#4ecdc4;">
    <button type="button" class="btn btn-light" ><a href="logout-user.php" >deconnexion</a></button>
    </nav>
    <h1 style="margin-top:-200px;">Bienvenue a vous<br> M. <?php echo $fetch_info['name'] ?></h1>

    <div style="margin-top: 10%; padding: 5%;">
    <table class="table table-bordered" id="dataTable" style="border-style: solid;" >
    <thead>
        <tr  style=" margin-left:200px; background-color:#4ecdc4;" >
            <td><b>ID</b></td>
            <td><b>NOM</b></td>
            <td><b>EMAIL</b></td>
            <td><b>SUSBJECT</b></td>
            <td ><b>MESSAGE</b></td>
            <td style='text-align: center'><b>Options</b></td>
        </tr>
    </thead>
    <?php
        $con = mysqli_connect("localhost", "root", "", "service") or die;
        $toto = " SELECT * FROM contact ";
        $r = mysqli_query($con, $toto) ;
        $t = mysqli_fetch_assoc($r) ;
        while($t = mysqli_fetch_assoc($r)){
            echo "<tr class='color'>";
            echo "<td>".$t["id"]."</td>";
            echo "<td>".$t["nom"]."</td>";
            echo "<td>".$t["email"]."</td>";
            echo "<td>".$t["susbject"]."</td>";
            echo "<td >".$t["message"]."</td>";
            echo "<td>"."<form action='ing.php' method='POST'><input type='text' class='d-none' name='contact' value=".$t['id']."><input type='submit' class='btn btn-danger' name='sup' value='supprimer' style='margin-left:180px;'></form>"."</td>";
            echo "</tr>";
    
        }
            
    ?>
    </table>
    <a href="http://localhost/test/projet1/VISITE/index.php" class="col"><button style="background-color:#4ecdc4;" type="submit"  name="send" class="btn btn-secondary, margin"  > Accueil</button></a>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/js/sb-admin-2.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="vendor/js/demo/datatables-demo.js"></script>
</body>
</html>