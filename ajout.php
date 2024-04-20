<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="partou.css">
    <title>Ajouter </title>
</head>
<body>

    <div class="container">
   

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
        <h2>Ajouter Un Utilisateur</h2>

            <label for="nom">Nom :</label> <br>
            <input type="text" id="nom" name="nom"><br><br>
            
            <label for="prenom">Prenom:</label> <br>
            <input type="text" id="prenom" name="prenom"> <br><br>



            <label for="h_entre">heure d'entre:</label> <br>
            <input type="text" id="h_entre" name="h_entre"> <br><br>

            <label for="h_sortie">Heure_sortie:</label> <br>
            <input type="text" id="h_sortie" name="h_sortie"> <br><br>

            <label for="profession">profession :</label> <br>
            <input type="text" id="profession" name="profession"><br><br> 

            <label for="date">date :</label> <br>
            <input type="date" id="date" name="date"><br><br><br><br>

            <input type="submit" name="valider" value="Valider"> <br><br>
        </form>
    
    </div>
</body>
</html>

<?php
$host = "localhost";
$user = "root";
$mdp = "";
$bd = "php";

$conn = mysqli_connect($host, $user, $mdp, $bd);

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

// Traitement de l'ajout de produit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['valider'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $profession = $_POST['profession'];

    // Requête SQL pour insérer un nouveau produit
    $sql_insert = "INSERT INTO utilisateurs (nom, prenom, profession) VALUES ('$nom', '$prenom', '$profession')";
    if (mysqli_query($conn, $sql_insert)) {
        echo "Personnel ajouté avec succès.";

        header("Location: utilisateur.php");
        exit;

    } else {
        echo "Erreur : " . $sql_insert . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>