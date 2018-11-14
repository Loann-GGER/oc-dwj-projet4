<?php

namespace Controller;

use Entity\Post;
use App\Bootstrap;

class FrontendController 
{
    public function listPosts()
    {
        $postRepo = Bootstrap::getEntityManager()->getRepository(Post::class);
        $post = $postRepo->findAll();
    
        require("view/frontend/indexFrontend.php");
    }

    public function singlePost()
    {
        $entityManager = Bootstrap::getEntityManager();
        require("view/frontend/single-post.php");

    }

    public function blog()
    {
        $postRepo = Bootstrap::getEntityManager()->getRepository(Post::class);
        $post = $postRepo->findAll();

        require("view/frontend/blog.php");
    }

    public function author()
    {
        require("view/frontend/auteur.php");
    }
}