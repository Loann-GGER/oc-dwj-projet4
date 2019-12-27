<?php

namespace Controller;

use Entity\Comment;
use Entity\Post;
use App\Bootstrap;

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
            try {
                $entityManager->persist($comment); // Création de la réquète 
                $entityManager->flush(); // Executer la réquète
            } catch(Exception $e) {
                echo $e->getMessage();
            } 
        }

        $_SESSION['flash'] = '🚀 Votre commentaire a bien été posté ! ';  
        header("location:index.php?action=singlepost&id=".$_POST['id']."#comArticle");
    }

    public function commentSignal()
    {   
        $entityManager = Bootstrap::getEntityManager();
        $comment = $entityManager->find("Entity\Comment",(int)$_GET['n_com']);
        $comment->setalert(true);
        $entityManager->flush();
       
        $_SESSION['flash'] = ' ✅ Votre commentaire a bien été signalé !';
        header("location:index.php?action=singlepost&id=".$_GET['id']);
    }

    public function manageComments()
    {  
        $postRepo = Bootstrap::getEntityManager()->getRepository(Comment::class);
        $comments = $postRepo->findBy(['alert'=>true]);
    
        $this->render('backend/manageComments.html', ['comments'=>$comments]);
    }

    public function aprouvecomment()
    {  
        $entityManager = Bootstrap::getEntityManager();
        $comment = $entityManager->find("Entity\Comment",$_GET['id']);
        $comment->setalert(false);
        $entityManager->flush();

        $_SESSION['flash'] = '🚀 Le commentaire a bien été conservé !';
        header("location:index.php?action=manageComments");
    }

    public function refusecomment()
    {  
        $entityManager = Bootstrap::getEntityManager();
        $comment = $entityManager->find("Entity\Comment",$_GET['id']);
        $entityManager->remove($comment);
        $entityManager->flush();

        $_SESSION['flash'] = '🗑 Le commentaire a bien été supprimé !';
        header("location:index.php?action=manageComments");
    }
}