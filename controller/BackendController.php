<?php

namespace Controller;

use Entity\Post;
use Entity\User;
use App\Bootstrap;
use App\Session;

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


    public function validelogin()
    {
        $postRepo = Bootstrap::getEntityManager()->getRepository(User::class);
        $user = $postRepo->find(1);
        
       
 
        if ($_POST['Email'] == $user->email() && password_verify($_POST['Password'], $user->password()))
        {
            if ($user->level() == 1) {
                $_SESSION['login'] = 1;
            }
        }
        else // Sinon, on affiche un message d'erreur
         {

            $_SESSION['login'] = 0;
        }
    
        header("location:index.php?action=login");
    }

    public function incrilogin()
    {
        $postPass = "MLKDGGL";
        
        $mail = "";

        $password = password_hash( $postPass, PASSWORD_BCRYPT);

        $entityManager = Bootstrap::getEntityManager();
        $entityManager->persist(); // Créer la réquète 
        $entityManager->flush(); // Exe. réquète
    }
    public function logout()
    {
        Session::destroy();
        header("location:index.php");
    }
}