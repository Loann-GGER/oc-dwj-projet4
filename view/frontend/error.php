<?php ob_start();?>
<?php
echo($title."<br/>");
    echo($message);
    ?>
<?php $content = ob_get_clean(); ?>

  <?php require("view/frontend/template.php");
