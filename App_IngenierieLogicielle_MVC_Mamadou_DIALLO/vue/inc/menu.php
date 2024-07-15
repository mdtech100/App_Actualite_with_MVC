<?php
    if (isset($categories) && !empty($categories)) {
        foreach ($categories as $categorie) {
          echo '<li><a href="index.php?action=categorie&id=' . $categorie->id . '">' . htmlspecialchars($categorie->libelle) . '</a></li>';
        }
    } 
?>
                
             
                