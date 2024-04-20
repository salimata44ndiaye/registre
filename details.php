<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylis.css">
    <title>Document</title>
    <style>
        body {

            background-color:rgb(47, 105, 143);
            background-image:url('  images/images/Femme-avec-tablette-pointe.jpg');
        }
        th{
            color:  #f5f7fa; 
        }

        td {
            padding: 20px 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="accueil.php" class="btn_add"><img src="image-plus.png" alt="">retour</a>
            <table border="2" width="1000px">
                <tr bgcolor='black'>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Heure d'entree</th>
                    <th>Heure de sortie</th>
                    <th>Profession</th>
                    <th>Date</th>
                    <th>voir</th>
                
                 </tr>

        <?php 
            include('connexion.php');
 
            $res = "select * from pointages";
            $resultat=mysqli_query($conn,$res);

            while($result= mysqli_fetch_assoc($resultat)){
                echo '<tr>';
                echo"<td>".$result['nom']."</td>";
                echo"<td>".$result['prenom']."</td>";
                echo"<td>".$result['h_entre']."</td>";
                echo"<td>".$result['h_sortie']."</td>";
                echo"<td>".$result['profession']."</td>";
                echo"<td>".$result['date']."</td>";
                echo "<td><a href=\"utilisateur.php?id=$result[id]\">utilisateur</a></td>";
                echo "<td><a href=\"supprimer.php?id=$result[id]\"
                onClick=\"return confirm('Etes vous sur ?')\">Supprimer</a></td>";
                
            }
            ?>
            </table>
    </div>
</body>
</html>