<?php ob_start(); ?>
<h1>Ecrire l'article</h1>

 <form method="post" action="index.php?action=post">
	<input type="text" name="title" placeholder="Titre de l'article" required="required"><br>
	<textarea rows="5" cols="25" name="content" placeholder="Contenu de l'article" required="required"></textarea><br>
	<input type="submit" id="btn-form" value="Envoyer">
</form>
<?php $content = ob_get_clean(); ?>

<?php require("view/backend/template.php");?>