<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="w3.css">
    <title>liste</title>
    <script>
        .tr{
            margin: 10px;
        }
    </script>
</head>
<body>
    <div style="margin-top: 5%; padding: 5%;">
    <table style="border-style: solid;" class="w3-table w3-hoverable w3-striped " >
        <tr style=" padding-right: 20px; " class="w3-blue">
            <td>id</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>sexe</td>
            <td>email</td>
            <td>password</td><hr>
            <td>commentaire</td>
            <td colspan='2' style='text-align: center'>Options</td>
        </tr>
    <?php
        $con = mysqli_connect("localhost", "root", "", "text") or die;
        $toto = " SELECT * FROM tata ";
        $r = mysqli_query($con, $toto) ;
        $t = mysqli_fetch_assoc($r) ;
        while($t = mysqli_fetch_assoc($r)){
            echo "<tr>";
            echo "<td>".$t["id"]."</td>";
            echo "<td>".$t["email"]."</td>";    
            echo "<td>".$t["commentaire"]."</td>";
            echo "<td>"."<form action='ing.php' method='POST'><input type='text' class='d-none' name='tata' value=".$t['id']."><input type='submit' class='btn btn-danger' name='sup' value='supprimer'></form>"."</td>";
            echo "<td>"."<form action='modif.php' method='POST'><input type='text' class='d-none' name='tata' value=".$t['id']."><input type='submit' class='btn btn-secondary' name='modif' value='modifier'></form>"."</td>";
            echo "</tr>";
    
        }
            
    ?>
    </table>
    <button type="submit"  name="send" class="btn btn-secondary"> <a href="formulaire.php">naviguer</a></button>
    </div>
</body>
</html>