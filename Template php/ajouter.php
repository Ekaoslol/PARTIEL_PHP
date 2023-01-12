<?php
include 'connexion.php';

error_reporting(0);
session_start();

    

    if (isset($_POST['ajouter'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        
     
        $sql = "INSERT INTO tableau (nom, prenom, age) VALUES('$nom', '$prenom', '$age')";
        $result = mysqli_query($connection, $sql);
     
    }

          

    
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Ajouter un utilisateur</h2>
        <h5> Renseigner le nom, prénom et l'âge de l'utilisateur </h5>
        <p class="erreur_message">
        </p>
        <form action="ajouter.php" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Prénom</label>
            <input type="text" name="prenom">
            <label>âge</label>
            <input type="number" name="age">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>

</body>

<!-- je ne comprend pas, je suis rester sur ça pendant 1 heure, j'ai essayé d'intégrer les bonnes valeurs par rapport au tableau, 
j'ai bien intégré le connexion.php qui était similaire au db.php sur notre projet de classe, rien ne marche cela ne renvoi aucune valeur sur ma base de donnée :( --> 

</html>

       </div>
	   </form>
	   <script src="assets/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
</body>
</html> 