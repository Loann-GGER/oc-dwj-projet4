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
   $POSTtitle = $mesPosts->title();
   $POSTcontents = $mesPosts->contents();
   $POSTauthor = $mesPosts->author();
   $POSTcreationDate = $mesPosts->creationDate();
   
?>
                        <div class="col-md-12">
                            <div class="blog-post">
                                <!-- <img src="img/blog_post_1.png" alt=""> -->
                                <div class="text-content">
                                    <span><a href="#"><?php echo($POSTauthor); ?></a> / <a href="#"><?php echo($POSTcreationDate); ?></a></span>
                                    <h2><?php echo($POSTtitle); ?></h2>
                                    <p><?php echo($POSTcontents); ?></p>
                                    <div class="simple-btn">
                                        <a href="#">Lire la suite</a>
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