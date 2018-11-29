<?php

namespace Controller;

use Entity\Post;
use App\Bootstrap;
use App\Session;

class PostController
{
    public function addPost()
    {
        require("view/backend/writeNewPost.php");
    }

    public function managePosts()
    {
        require("view/backend/managePosts.php");
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
            
                var_dump($post); // Voir 
            try
            {
                $entityManager = Bootstrap::getEntityManager();
                $entityManager->persist($post); // Créer la réquète 
                $entityManager->flush(); // Exe. réquète
            } 
            catch(Exception $e) 
            {
                var_dump($e->getMessage());
            } 
        }
        Session::setValue('flash', 'Votre post a bien été écrit');
        header("location:index.php?action=writeNewPost");
    }

    // READ POST
    public function show($id)
    {
        $postRepo = Bootstrap::getEntityManager()->getRepository(Post::class);
        $post = $postRepo->find($id);
        // var_dump($post);

        if ($post === null) {
            echo "Post non trouvé ! ";
        }
        
        echo ('Title : '.$post->title().'<br/>');
        echo ('Contents : '.$post->contents().'<br/>');
    }

    public function viewposts()
    {   
        $postRepo = Bootstrap::getEntityManager()->getRepository(Post::class);
        $post = $postRepo->findAll();

        require("view/backend/viewposts.php");
    }

    // UPDATE POST
    public function updatePosts()
    {
        $entityManager = Bootstrap::getEntityManager();
        $post = $entityManager->find("Entity\Post",$_POST['id']);
        var_dump($post);

        $post->setTitle($_POST['title']);
        $post->setContents($_POST['content']);
        var_dump($post);
        echo("<br/>");

        $entityManager->flush(); // Exe. réquète



    }

    public function writeUpdatePosts()
    {
        require("view/backend/writeUpdatePost.php");
    }

    //DELETE POST
    public function deletePost()
    {
        $entityManager = Bootstrap::getEntityManager();
        $post = $entityManager->find("Entity\Post",$_POST['id']);
        var_dump($post);

        $entityManager->remove($post);
        $entityManager->flush();
        echo('ok l\''.$_POST['id'].'est sup');       
    }

    public function viewdelete()
    {
        require("view/backend/viewdelete.php");
    }




}