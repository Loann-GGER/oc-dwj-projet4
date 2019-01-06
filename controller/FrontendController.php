<?php

namespace Controller;

use Entity\Post;
use App\Bootstrap;
use App\Session;

class FrontendController extends Controller
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
        // require("view/frontend/auteur.php");
        $this->render("frontend/auteur.php");
    }

    public function mentionlegales()
    {
        require("view/frontend/mentionlegales.php");
    }
}