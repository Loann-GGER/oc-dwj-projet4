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

    public function managePosts()
    {
        $this->render('backend/managePosts.html');
    }

    public function writeUpdatePosts()
    {
        $this->render('backend/writeUpdatePost.html');
    }

    public function writePost()
    {
        $this->render('backend/writeUpdatePost.html');
    }

    public function updatePost()
    {
        $postRepo = Bootstrap::getEntityManager()->getRepository(Post::class);
        $post = $postRepo->find($_GET['id']);
        
        $this->render('backend/writeUpdatePost.html', compact('post')); //compact('post) équivalent à ['post'=>$post]
    }
    
    public function viewdelete()
    {
        $this->render('backend/viewdelete.html');
    }


    // CREATE POST 
    public function postPost()
    {
        echo 'ok';
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo 'post';
            $post = new Post([
                'title'=>$_POST['title'],
                'contents'=>$_POST['content'],
                'author'=>'Jean Forteroche',
                'creationdate'=>new \DateTime("now")
                ]);
            
                var_dump($post); // Voir 
            try
            {
                echo 'try';
                $entityManager = Bootstrap::getEntityManager();
                $entityManager->persist($post); // Créer la réquète 
                $entityManager->flush(); // Exe. réquète
            } 
            catch(Exception $e) 
            {
                var_dump($e->getMessage());
            } 
        }
        $_SESSION['flash'] = 'ℹ️ Votre post a bien été posté ! ';
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

        $this->render('backend/viewposts.html',['posts'=>$post]);
    }

    // UPDATE POST
    public function updatePosts()
    {
        $entityManager = Bootstrap::getEntityManager();
        $post = $entityManager->find("Entity\Post",$_POST['id']);

        $post->setTitle($_POST['title']);
        $post->setContents($_POST['content']);
        $entityManager->flush(); // Exe. réquète
 
        $_SESSION['flash'] = '🎨 Votre article a été mise à jour ! ';

        header("location:index.php?action=updatePost&id=".$_POST['id']);
    }

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
            echo("Vous n'avez pas les droits d'effectuer cette action !");
        }
    }
}