<?php include 'inc/menu.php'; ?>

<div class="content">
    <div class="content-container">
        <?php
        if (isset($article)) {
            echo "<article class='article'>";
            echo "<h2>" . htmlspecialchars($article->titre) . "</h2>";
            echo "<p>" . htmlspecialchars($article->contenu) . "</p>";
            echo "<small>Publié le " . $article->dateCreation . "</small>";
            echo "</article>";
        } else {
            echo "Article non trouvé.";
        }
        ?>
    </div>
</div>

<?php include './inc/footer.php'; ?>
