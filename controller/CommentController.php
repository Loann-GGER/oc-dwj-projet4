<?php

namespace Controller;

use Entity\Comment;
use App\Bootstrap;

class CommentController
{
    public function postComment()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $comment = new Comment([
                'postid'=>$_POST['id'],
                'contents'=>$_POST['content'],
                'author'=>$_POST['author'],
                'alert'=>0
                ]);
                // var_dump($comment); // Voir 
            try
            {
                $entityManager = Bootstrap::getEntityManager();
                $entityManager->persist($comment); // Créer la réquète 
                $entityManager->flush(); // Exe. réquète
            } 
            catch(Exception $e) 
            {
                var_dump($e->getMessage());
            } 
        }
        echo("ok comment en BDD");
     
    }

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
        $comment = $entityManager->find("Entity\Comment",$_GET['id']);
        // var_dump($comment);

        $comment->setalert(true);
        // var_dump($comment);
        // echo("<br/>");

        $entityManager->flush(); // Exe. réquète
       
        echo("ok,commentaire signaler !");

    }


    public function manageComments()
    {  
        $postRepo = Bootstrap::getEntityManager()->getRepository(Comment::class);
        $comments = $postRepo->findAll();

        require("view/backend/manageComments.php");
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