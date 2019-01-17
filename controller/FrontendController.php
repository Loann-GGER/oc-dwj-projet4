<?php

namespace Controller;

use Entity\Post;
use App\Bootstrap;
use App\Session;

class FrontendController extends Controller
{
    public function index()
    {
        $postRepo = Bootstrap::getEntityManager()->getRepository(Post::class);
        $post = $postRepo->findAll();

        $this->render("frontend/indexFrontend.html",['posts'=>$post]);
    }

    public function singlePost()
    {
        $entityManager = Bootstrap::getEntityManager();
        $this->render("frontend/singlePost.html");

    }

    public function blog()
    {
        $postRepo = Bootstrap::getEntityManager()->getRepository(Post::class);
        $post = $postRepo->findAll();

        $this->render("frontend/blog.html",['post'=>$post]);
    }

    public function author()
    {
        $this->render("frontend/auteur.html");
    }

    public function mentionlegales()
    {
        require("view/frontend/mentionlegales.html");
    }
}