<?php include 'inc/menu.php'; ?>

<div class="content">
    <div class="content-container">
        <?php
        if (!empty($articles)) {
            foreach ($articles as $article) {
                echo "<article class='article'>";
                echo "<h2>" . htmlspecialchars($article->titre) . "</h2>";
                echo "<p>" . htmlspecialchars($article->contenu) . "</p>";
                echo "<small>Publié le " . $article->dateCreation . "</small>";
                echo "</article>";
            }
        } else {
            echo "Aucun article trouvé dans cette catégorie.";
        }
        ?>
    </div>
</div>

<?php include './inc/footer.php'; ?>
