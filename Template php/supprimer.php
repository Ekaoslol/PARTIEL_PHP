<?php
// CA MARCHE PAS
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
 
           
 // ici on se connecte à la database
     

 

  //récupération de l'id dans le lien

  //requête de suppression

  //redirection vers la page index.php
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
        <h2>Utilisateur à supprimer: </h2>
        <p class="erreur_message">
        </p>
        <form action="declaration.php" method="POST">
            <label>Rentrez son nom</label>
            <input type="text" name="nom" value="">
            <label>Rentrez son prénom</label>
            <input type="text" name="prenom" value="">
            <label>Rentrez son âge</label>
            <input type="number" name="age" value="">
            <input type="submit" value="SUPPRIMER CET UTILISATEUR DE LA BASE DE DONNEE" name="button">
        </form>
    </div>
</body>

</html>