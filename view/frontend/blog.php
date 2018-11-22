<?php ob_start(); ?>
<div class="page-heading">
        <div class="container">
            <div class="heading-content">
                <h1>BLOG</h1>
            </div>
        </div>
</div>
<div class="blog-entries">
        <div class="container">
            <div class="col-md-9">
                <div class="blog-posts">
                    <div class="row">

<?php 


foreach ($post as $mesPosts)
{
    $POSTid = $mesPosts->id();
    $POSTtitle = $mesPosts->title();
    $POSTcontents = $mesPosts->contents();
    $POSTauthor = $mesPosts->author();
    $POSTcreationDates = $mesPosts->creationDate();

    if (strlen($POSTcontents)>800) 
    {
        $POSTcontents = substr($POSTcontents, 0, 800);
        $dernier_mot = strrpos($POSTcontents," ");
        $POSTcontents = substr($POSTcontents,0,$dernier_mot);
    }
?>
                        <div class="col-md-12">
                            <div class="blog-post">
                                <!-- <img src="img/blog_post_1.png" alt=""> -->
                                <div class="text-content">
                                    <h2><?php echo($POSTtitle);?></h2>
                                    <span><a href="#">Auteur : <?php echo($POSTauthor); ?></a> / <a href="#">Date de publication :</a></span>
                                    <p><?php echo($POSTcontents."...");?></p>
                                    <div class="simple-btn">
                                        <a href="<?php echo("index.php?action=singlepost&id=".$POSTid)?>">Lire la suite</a>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php 
}
?>

</div>
</div>
</div>
</div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("view/frontend/template.php");?>