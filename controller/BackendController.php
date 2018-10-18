<?php

namespace Controller;

use Entity\Post;
use App\Bootstrap;

class BackendController
{
    
    public function admin()
    {
        require("view/backend/template.php");
    }

    public function writeNewPost()
    {
        $post = new Post(['title'=>$_POST['title']]);
        Bootstrap::getEntityManager()->persist($post);
        // ->flush();
        $postRepo = Bootstrap::getEntityManager()->getRepository(Post::class);
        $post = $postRepo->find(1);
        var_dump($post);

       
        // $this->entityManager->persist($user);                   $this->entityManager->flush();

        require("view/backend/writeNewPost.php");
        
    }

    public function managePosts()
    {
        require("view/backend/template.php");
        echo("Gerer les acticles");
    }

    public function manageComments()
    {
        require("view/backend/template.php");
        echo("Gerer les commentaires");
    }
}