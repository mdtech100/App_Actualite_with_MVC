<?php

require_once 'ConnexionManager.php';
require_once '../modele/domaine/article.php';

class ArticleDao {
    private $connexion;

    public function __construct() {
        $this->connexion = ConnexionManager::getConnexion();
    }

    
    public function getAllArticles() {
        $sql = "SELECT * FROM Article ORDER BY dateCreation DESC";
        $result = $this->connexion->query($sql);
        $articles = [];

        while ($row = $result->fetch_assoc()) {
            $article = new Article();
            $article->id = $row['id'];
            $article->titre = $row['titre'];
            $article->contenu = $row['contenu'];
            $article->categorie = $row['categorie'];
            $article->dateCreation = $row['dateCreation'];
            $articles[] = $article;
        }

        return $articles;
    }

    public function getArticlesByCategorie($categorieId) {
        $sql = "SELECT * FROM Article WHERE categorie = ? ORDER BY dateCreation DESC";
        $stmt = $this->connexion->prepare($sql);
        $stmt->bind_param("i", $categorieId);
        $stmt->execute();
        $result = $stmt->get_result();
        $articles = [];

        while ($row = $result->fetch_assoc()) {
            $article = new Article();
            $article->id = $row['id'];
            $article->titre = $row['titre'];
            $article->contenu = $row['contenu'];
            $article->categorie = $row['categorie'];
            $article->dateCreation = $row['dateCreation'];
            $articles[] = $article;
        }

        return $articles;
    }
}
?>
