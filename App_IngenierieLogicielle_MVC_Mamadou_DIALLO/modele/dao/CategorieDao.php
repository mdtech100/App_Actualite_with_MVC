<?php

require_once 'ConnexionManager.php';
require_once '../modele/domaine/categorie.php';

class CategorieDao {
    private $connexion;

    public function __construct() {
        $this->connexion = ConnexionManager::getConnexion();
    }

    public function getAllCategories() {
        $sql = "SELECT * FROM Categorie";
        $result = $this->connexion->query($sql);
        $categories = [];

        while ($row = $result->fetch_assoc()) {
            $categorie = new Categorie();
            $categorie->id = $row['id'];
            $categorie->libelle = $row['libelle'];
            $categories[] = $categorie;
        }

        return $categories;
    }
}
?>
