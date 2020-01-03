<?php

namespace Controller;

use Entity\Post;
use App\Bootstrap;
use App\Session;

class PostController extends Controller
{
    public function addPost()
    {
        $this->render('backend/writeNewPost.html');
    }

    public function writeUpdatePosts()
    {
        $this->render('backend/writeUpdatePost.html');
    }

    public function writePost()
    {
        $this->render('backend/writeUpdatePost.html');
    }

    // CREATE POST 
    public function postPost()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = new Post([
                'title'=>$_POST['title'],
                'contents'=>$_POST['content'],
                'author'=>'Jean Forteroche',
                'creationdate'=>new \DateTime("now")
                ]);
            try
            {
                $entityManager = Bootstrap::getEntityManager();
                $entityManager->persist($post);
                $entityManager->flush();
            } 
            catch(Exception $e) 
            {
                var_dump($e->getMessage());
            } 
        }

        $_SESSION['flash'] = 'ℹ️ Votre post a bien été posté ! ';
        header("location:index.php?action=writeNewPost");
    }

    public function viewposts()
    {   
        $postRepo = Bootstrap::getEntityManager()->getRepository(Post::class);
        $post = $postRepo->findAll();
        $this->render('backend/viewPosts.html',['posts'=>$post]);
    }

    // Update Post
    public function updatePosts()
    {
        $entityManager = Bootstrap::getEntityManager();
        $post = $entityManager->find("Entity\Post",$_POST['id']);

        $post->setTitle($_POST['title']);
        $post->setContents($_POST['content']);
        $entityManager->flush();
 
        $_SESSION['flash'] = '🎨 Votre article a été mise à jour ! ';

        header("location:index.php?action=updatePost&id=".$_POST['id']);
    }

    public function updatePost()
    {
        $postRepo = Bootstrap::getEntityManager()->getRepository(Post::class);
        $post = $postRepo->find((int)$_GET['id']);
        
        $this->render('backend/writeUpdatePost.html', compact('post')); //compact('post) équivalent à ['post'=>$post]
    }

    // Delele
    public function delete()
    {
        if (isset($_SESSION['login']) && $_SESSION['login'] === 1)
        {
            $entityManager = Bootstrap::getEntityManager();
            $post = $entityManager->find("Entity\Post",$_GET['id']);
            $entityManager->remove($post);
            $entityManager->flush();
        
            $_SESSION['flash'] = '🗑 Votre article a été supprimé ! ';
            header("location:index.php?action=viewPosts");
        }
        else 
        {
            echo("Vous n'avez pas les droits d'effectuer cette action !"); // Erreur 403
        }
    }
}