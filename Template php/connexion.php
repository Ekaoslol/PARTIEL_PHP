<?php
$server = "localhost";
$user = "root";
$pass = "root";
$database = "partiel_php";

$connection = mysqli_connect($server, $user, $pass, $database);

if (!$connection) {
    die("Erreur");
}

  //connexion à la base de données
