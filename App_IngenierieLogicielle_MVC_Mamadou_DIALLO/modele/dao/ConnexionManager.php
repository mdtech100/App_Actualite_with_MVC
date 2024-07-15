<?php

class ConnexionManager {
    public static function getConnexion() {
        $host = 'localhost'; 
        $db = 'mglsi_news'; 
        $user = 'root'; 
        $password = ''; 

        $connexion = new mysqli($host, $user, $password, $db);

        if ($connexion->connect_error) {
            die("Erreur de connexion : " . $connexion->connect_error);
        }

        return $connexion;
    }
}
?>
