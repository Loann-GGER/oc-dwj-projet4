<?php

namespace Controller;

use Entity\Comment;
use Entity\Post;
use App\Bootstrap;
use App\Session;

class CommentController extends Controller
{
    public function postComment()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $entityManager = Bootstrap::getEntityManager();
            $comment = new Comment([
                'post'=>$entityManager->find("Entity\Post",$_POST['id']),
                'contents'=>$_POST['content'],
                'author'=>$_POST['author'],
                'alert'=>0,
                'publicationDate'=>new \DateTime("now")
                ]);
                // var_dump($comment); // Voir 
            try
            {
                $entityManager->persist($comment); // Créer la réquète 
                $entityManager->flush(); // Exe. réquète
            } 
            catch(Exception $e) 
            {
                var_dump($e->getMessage());
            } 
        }

        $_SESSION['flash'] = 'Votre commentaire a bien été posté ! ';
        header("location:index.php?action=singlepost&id=".$_POST['id']);
     
    }
    /**
     * 
     */
    public function viewComment()
    {   
        $postRepo = Bootstrap::getEntityManager()->getRepository(Comment::class);
        $post = $postRepo->findAll();

        foreach ($post as $mesPosts)
        {
            $idpost = $mesPosts->postId();
            if ($idpost == 2){
                echo ('ID : '.$mesPosts->id().'<br/>');
                echo ('Title : '.$mesPosts->postId().'<br/>');
                echo ('Contents : '.$mesPosts->contents().'<br/>');
                echo ('Author : '.$mesPosts->author().'<br/>');
                echo ('CreationDate : '.$mesPosts->alert().'<br/>');
                echo ("<br/>"); 
            }
        }
    }

    public function commentSignal()
    {   
        $entityManager = Bootstrap::getEntityManager();
        $comment = $entityManager->find("Entity\Comment",$_GET['n_com']);
        $comment->setalert(true);
        $entityManager->flush(); // Exe. réquète
       
        $_SESSION['flash'] = 'Votre commentaire a bien été signalé !';
        header("location:index.php?action=singlepost&id=".$_GET['id']);

    }


    public function manageComments()
    {  
        $postRepo = Bootstrap::getEntityManager()->getRepository(Comment::class);
        $comments = $postRepo->findAll();

       $this->render('view/backend/manageComments.php', ['comments'=>$comments]);
    }

    public function aprouvecomment()
    {  
        $entityManager = Bootstrap::getEntityManager();
        $comment = $entityManager->find("Entity\Comment",$_GET['id']);
        // var_dump($comment);

        $comment->setalert(false);
        // var_dump($comment);
        // echo("<br/>");

        $entityManager->flush(); // Exe. réquète
        echo("comm supprimer");
    
    }

    public function refusecomment()
    {  
        $entityManager = Bootstrap::getEntityManager();
        $comment = $entityManager->find("Entity\Comment",$_GET['id']);
        $entityManager->remove($comment);
        $entityManager->flush();
        echo("comm conserver");

    }
}