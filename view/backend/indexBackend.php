<?php ob_start(); ?>
<h1>Bienvenue sur l'espace administrateur</h1>

<div>
      <ul>
        <p>Gestion des articles</p>
        <li><a href="index.php?action=writeNewPost">Ecrire un nouvel article</a></li>
        <li><a href="index.php?action=voirlesposts">Lire les acticles</a></li>
        <li><a href="index.php?action=writeUpdatePosts">Mofidier un acticle</a></li>
        <li><a href="index.php?action=viewdelete">Supprimer un article</a></li>
        <br/><br/>
        <p>Gestion des commentaires</p>
        <li><a href="index.php?action=manageComments">Lire les commentaires</a></li>
      </ul>
</div>

<?php $content = ob_get_clean(); ?>

<?php require("view/backend/template.php");?>