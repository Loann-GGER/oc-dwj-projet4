<?php ob_start(); ?>
<p>Gerer les acticles</p>

<?php $content = ob_get_clean(); ?>

<?php require("view/backend/template.php");?>