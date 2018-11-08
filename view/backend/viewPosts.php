<?php ob_start(); 

use Controller\BackendController;

$backend = new BackendController();

$backend->viewposts();

?>
<?php $content = ob_get_clean(); ?>

<?php require("view/backend/template.php");?>