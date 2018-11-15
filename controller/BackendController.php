<?php

namespace Controller;

use Entity\Post;
use Entity\User;
use App\Bootstrap;

class BackendController
{ 
    
    public function login()
    {  
        require("view/backend/login.php");
    }

    public function register()
    {  
        require("view/backend/register.php");
    }

    public function forgotPassword()
    {  
        require("view/backend/forgot-password.php");
    }
    
    public function admin()
    {
        require("view/backend/indexBackend.php");
    }

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
        echo("Le post est save ! <br/>");
        echo('<a href="index.php?action=writeNewPost">Retour</a>');
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

        foreach ($post as $mesPosts)
        {
            echo ('ID : '.$mesPosts->id().'<br/>');
            echo ('Title : '.$mesPosts->title().'<br/>');
            echo ('Contents : '.$mesPosts->contents().'<br/>');
            echo ('Author : '.$mesPosts->author().'<br/>');
            echo ('CreationDate : '.$mesPosts->creationDate().'<br/>');
            echo ("<br/>");
        }
    }

    public function voirlesposts()
    {
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


    public function validelogin()
    {
        // On démarre la session AVANT d'écrire du code HTML
        session_start();

        $postRepo = Bootstrap::getEntityManager()->getRepository(User::class);
        $user = $postRepo->find(1);
        
       
 
        if ($_POST['Email'] == $user->email() && $_POST['Password'] == $user->password())
        {
            if ($user->level() == 1) {
                $_SESSION['login'] = 1;
            }
        }
        else // Sinon, on affiche un message d'erreur
         {

            $_SESSION['login'] = 0;
        }
    
        echo("lien vers espace admin <a href='index.php?action=admin'>ICI</a>");
    }

    public function logout()
    {
        session_start();
        $_SESSION['login'] = 0;
        echo("Déconnexion avec succès</br>");
        echo("lien vers l'accueil <a href='index.php'>ICI</a>");
    }
}