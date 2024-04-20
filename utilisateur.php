<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylis.css">
    <title>Document</title>
    <style>
         body {
            margin; 0;
            background-color: black;
            color: white;
         }

         th{
            font-size: 16px;
            border-bottom: 3px solid #ececee;
            padding: 5px 20px;
            font-weight: 500;
            background-color:  rgb(242, 246, 248);
        }

        td {
            padding: 25px 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="accueil.php" class="btn_add"><img src="image-plus.png" alt=""> retour</a>
            <table border="" width="1000px" >
                <tr bgcolor=' #f5f7fa'>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Profession</th>
                    <th>Voir</th>
                    <th>Delete</th>
                 </tr>

        <?php 
            include('connexion.php');
 
            $res = "select * from utilisateurs";
            $resultat=mysqli_query($conn,$res);
            while($result= mysqli_fetch_assoc($resultat)){
                echo '<tr>';
                echo"<td>".$result['nom']."</td>";
                echo"<td>".$result['prenom']."</td>";
                echo"<td>".$result['profession']."</td>";
                echo "<td><a href=\"details.php?id=$result[id]\">details</a></td>";
                echo "<td><a href=\"supprimer.php?id=$result[id]\"
                onClick=\"return confirm('Etes vous sur ?')\">Supprimer</a></td>";
            }
            ?>
            </table>
    </div>
</body>
</html>