<?php

require_once '../modele/dao/ArticleDao.php';
require_once '../modele/dao/CategorieDao.php';

class Controller {
    private $articleDao;
    private $categorieDao;

    public function __construct() {
        $this->articleDao = new ArticleDao();
        $this->categorieDao = new CategorieDao();
    }

    public function displayAccueil() {
        $articles = $this->articleDao->getAllArticles();
        include '../vue/accueil.php';
    }

    public function displayArticle($id) {
        $article = $this->articleDao->getArticleById($id);
        include '../vue/article.php';
    }

    public function displayArticlesByCategorie($categorieId) {
        $articles = $this->articleDao->getArticlesByCategorie($categorieId);
        include '../vue/articleByCategorie.php';
    }

    public function afficherMenu() {
        $categories = $this->categorieDao->getAllCategories();
        include '../vue/inc/menu.php';
    }
    

    
}
?>
