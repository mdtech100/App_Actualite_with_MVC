<?php

$host = 'localhost'; 
$db = 'mglsi_news'; 
$user = 'root'; 
$password = ''; 

// Connexion à la base de données
$connexion = new mysqli($host, $user, $password, $db);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("Erreur de connexion : " . $connexion->connect_error);
}
?>
