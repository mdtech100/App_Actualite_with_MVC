<?php

require_once '../controller/Controller.php';

$controller = new Controller();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités Polytechniciennes</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <header>
        <div class="banner">
            <h1>ACTUALITES POLYTECHNICIENNES</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php?action=accueil">Accueil</a></li>
                <?php
                $controller->afficherMenu();
                ?>
            </ul>
        </nav>
    </header>
    <div class="content">
        <?php
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
            switch ($action) {
                case 'accueil':
                    $controller->displayAccueil();
                    break;
                case 'categorie':
                    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                        $id = (int)$_GET['id'];
                        $controller->displayArticlesByCategorie($id);
                    } else {
                        echo "Catégorie non trouvée.";
                    }
                    break;
                case 'article':
                    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                        $id = (int)$_GET['id'];
                        $controller->displayArticle($id);
                    } else {
                        echo "Article non trouvé.";
                    }
                    break;
                default:
                    echo "Action non reconnue.";
                    break;
            }
        } else {
            $controller->displayAccueil();
        }
        ?>
    </div>
</body>
</html>
