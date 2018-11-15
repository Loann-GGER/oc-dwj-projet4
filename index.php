<?php 

require "vendor/autoload.php";

use App\Session;
Session::start();

use Controller\BackendController;
use Controller\PostController;
use Controller\CommentController;
use Controller\FrontendController;

$frontend = new FrontendController();
$backend = new BackendController();
$post = new PostController();
$comment = new CommentController();

if (isset($_GET['action'])) 
{
    switch ($_GET['action'])
    {
        case 'admin':
            $backend->admin();
            break;

        case 'writeNewPost':
            $backend->addPost();
            break;

        case 'managePosts':
            $backend->managePosts();
            break;

        case 'manageComments':
            $comment->manageComments();
            break;

        case 'post':
            $backend->postPost();
            break;

        case 'login':
            $backend->login();
            break;

        case 'register':
            $backend->register();
            break;

        case 'forgotPassword':
            $backend->forgotPassword();
            break;  

        case 'singlepost':
            $frontend->singlePost();
            break;

        case 'testpost':
            $backend->show();
            break;

        case 'delete':
            $backend->deletePost();
            break;

        case 'blog':
            $frontend->blog();
            break;

        case'author':
            $frontend->author();
            break;

        case 'viewPosts':
            $backend->viewPosts();
            break;

        case 'voirlesposts':
            $backend->voirlesposts();
            break;

        case 'updatePosts':
            $backend->updatePosts();
            break;

        case 'writeUpdatePosts':
            $backend->writeUpdatePosts();
            break;

        case 'delete':
            $backend->deletePost();
            break;

        case 'viewdelete':
            $backend->viewdelete();
            break;

        case 'lireunpost':
            $backend->show(2);
            break;
        case 'postComment':
            $comment->postComment();
            break;
        case 'viewComment':
            $comment->viewComment();
            break;
        case 'commentSignal':
            $comment->commentSignal();
            break;
        case 'aprouvecomment':
            $comment->aprouvecomment();
            break;
        case 'refusecomment':
            $comment->refusecomment();
            break;
        case 'validelogin':
            $backend->validelogin();
            break;
        case 'logout':
            $backend->logout();
            break;
        default:
            $frontend->listPosts();
            break;
    }
}
else {
    $frontend->listPosts();
}
