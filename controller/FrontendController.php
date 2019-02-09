<?php

namespace Controller;

use Entity\Post;
use Entity\Comment;
use App\Bootstrap;
use App\Session;

class FrontendController extends Controller
{
    public function index()
    {
        $postRepo = Bootstrap::getEntityManager()->getRepository(Post::class);
        $post = $postRepo->findBy([],["id"=>"desc"]);

        $this->render("frontend/indexFrontend.html",['posts'=>$post]);
    }

    public function singlePost()
    {
        $entityManager = Bootstrap::getEntityManager();
        $post = $entityManager->find("Entity\Post",$_GET['id']);

        $commentaires = $post->comments();

        $this->render("frontend/singlePost.html",['post'=>$post,'commentaires'=>$commentaires]);

    }

    public function blog()
    {
        $postRepo = Bootstrap::getEntityManager()->getRepository(Post::class);
        $post = $postRepo->findAll();

        $this->render("frontend/blog.html",['posts'=>$post]);
    }

    public function author()
    {
        $this->render("frontend/auteur.html");
    }

    public function mentionlegales()
    {
        $this->render("frontend/mentionlegales.html");
    }
}