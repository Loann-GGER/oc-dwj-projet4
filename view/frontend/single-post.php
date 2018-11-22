<?php ob_start(); 

$mesPosts = $entityManager->find("Entity\Post",$_GET['id']);
$POSTid = $mesPosts->id();
$POSTtitle = $mesPosts->title();
$POSTcontents = $mesPosts->contents();
$POSTauthor = $mesPosts->author();
$POSTcreationDate = $mesPosts->creationDate();

use Entity\Comment;
use App\Bootstrap;
?>


   
<div class="page-heading">
        <div class="container">
            <div class="heading-content">
                <h1><?php echo($POSTtitle);?></h1>
            </div>
        </div>
</div>
<div class="blog-entries">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="blog-posts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-blog-post">
                            <div class="text-content">
                                <span><a href="index.php?action=author">Auteur : <?php echo($POSTauthor);?></a> / <a href="#">Date de publication : </a></span>
                                <p><?php echo($POSTcontents);?></p>
                                <span><a href="index.php?action=blog">Retour au Blog</a></span>
                                <div class="tags-share">
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-content">
                                            <span><p>Commentaires :</p></span>
                                            <?php
                                    $postRepo = Bootstrap::getEntityManager()->getRepository(Comment::class);
                                    $post = $postRepo->findAll();

                                    foreach ($post as $mesPosts)
                                    {
                                        $idpost = $mesPosts->postId();
                                        $alert = $mesPosts->alert();
                                        if ($idpost == $POSTid ){

                                            if ($alert == false) {

                                           
                                            $commentaireid = $mesPosts->id();
                                            $commentairecontents = $mesPosts->contents();
                                            $commentaireauthor = $mesPosts->author();
                                        
                                    ?>
                                        <div style='border: 1px blue solid'>
                                            <p>AUTEUR : <?php echo($commentaireauthor);?>
                                            <br/>
                                            COMMENT : <?php echo($commentairecontents);?></p>
                                            <a href="<?php echo("index.php?action=commentSignal&id=".$commentaireid)?>">Signaler le commentaire</a>
                                        </div>

                                    <?php
                                     }
                                    }
                                    }
                                            ?>

                                        
                                        <p>Ajouter un commentaire : </p>
                                        <p>
                                            <?php
                                        if(!empty($flash = App\Session::get('flash'))) {
                                        echo $flash; App\Session::setValue('flash', '');
                                        }
                                        ?>
                                        </p>
                                        <form method="post" action="index.php?action=postComment">
                                            <input type="text" name="author" placeholder="Auteur" required="required">
                                            <input style="display:none;" type="text" name="id" value=<?php echo($POSTid);?>>
                                            <br/>
                                            <textarea rows="5" cols="25" name="content" placeholder="Contenu du commentaire" required="required"></textarea><br>
                                            <input type="submit" id="btn-form" value="Envoyer">
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("view/frontend/template.php");?>
