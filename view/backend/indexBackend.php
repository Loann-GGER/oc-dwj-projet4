<?php ob_start(); ?>
<h1>Bienvenue sur l'espace administrateur</h1>

<div>
      <ul>
        <li><a href="index.php?action=writeNewPost">Ecrire un nouvel article</a></li>
        <li><a href="index.php?action=managePosts">Gestion des articles</a></li>
        <li><a href="index.php?action=manageComments">Gestion des commentaires</a></li>
      </ul>
</div>

<?php $content = ob_get_clean(); ?>

<?php require("view/backend/template.php");?>