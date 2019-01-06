<?php 

require "vendor/autoload.php";

use App\Session;
use App\Router;

Session::start();

$router = new Router($_GET['action']);
$router->getRoute(
    // 'admin', ['controller'=>'backendController', 'method'=>'admin'],
    'author', ['controller'=>'frontendController', 'method'=>'author']

);
$router->postRoute('writeNewPost', ['controller'=>'postController', 'method'=>'addPost']);

$router->run();

// if (isset($_GET['action'])) 
// {
//     switch ($_GET['action'])
//     {
//         case 'admin':
//             $backend->admin();
//             break;

//         case 'writeNewPost':
//             $post->addPost();
//             break;

//         case 'managePosts':
//             $post->managePosts();
//             break;

//         case 'manageComments':
//             $comment->manageComments();
//             break;

//         case 'post':
//             $post->postPost();
//             break;

//         case 'login':
//             $user->login();
//             break;

//         case 'register':
//             $user->register();
//             break;

//         case 'forgotPassword':
//             $user->forgotPassword();
//             break;  

//         case 'singlepost':
//             $frontend->singlePost();
//             break;

//         case 'testpost':
//             $post->show();
//             break;

//         case 'delete':
//             $post->deletePost();
//             break;

//         case 'blog':
//             $frontend->blog();
//             break;



//         case 'viewPosts':
//             $post->viewPosts();
//             break;

//         case 'voirlesposts':
//             $post->voirlesposts();
//             break;

//         case 'updatePosts':
//             $post->updatePosts();
//             break;

//         case 'writeUpdatePosts':
//             $post->writeUpdatePosts();
//             break;

//         case 'delete':
//             $post->deletePost();
//             break;

//         case 'viewdelete':
//             $post->viewdelete();
//             break;

//         case 'lireunpost':
//             $post->show(2);
//             break;
//         case 'postComment':
//             $comment->postComment();
//             break;
//         case 'viewComment':
//             $comment->viewComment();
//             break;
//         case 'commentSignal':
//             $comment->commentSignal();
//             break;
//         case 'aprouvecomment':
//             $comment->aprouvecomment();
//             break;
//         case 'refusecomment':
//             $comment->refusecomment();
//             break;
//         case 'validelogin':
//             $user->validelogin();
//             break;
//         case 'logout':
//             $user->logout();
//             break;
//         case 'mentionlegales':
//             $frontend->mentionlegales();
//             break;

//         case 'error':
//             $error->errors();
//             break;

//         default:
//             $frontend->listPosts();
//             break;
//     }
// }
// else {
//     $frontend->listPosts();
// } 
