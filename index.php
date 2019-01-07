<?php 

require "vendor/autoload.php";

use App\Session;
use App\Router;

Session::start();

$router = new Router($_GET['action']);

$router->getRoute('author', ['controller'=>'FrontendController', 'method'=>'author']);
$router->getRoute('singlepost', ['controller'=>'FrontendController', 'method'=>'singlepost']);
$router->getRoute('blog', ['controller'=>'FrontendController', 'method'=>'blog']);

$router->getRoute('admin', ['controller'=>'BackendController', 'method'=>'admin']);

$router->getRoute('login', ['controller'=>'UserController', 'method'=>'login']);
$router->getRoute('manageComments', ['logout'=>'UserController', 'method'=>'logout']);

$router->getRoute('writeNewPost', ['controller'=>'PostController', 'method'=>'addPost']);
$router->getRoute('managePosts', ['controller'=>'PostController', 'method'=>'managePosts']);
$router->getRoute('delete', ['controller'=>'PostController', 'method'=>'deletePost']);

$router->getRoute('error', ['controller'=>'ErrorController', 'method'=>'errors']);






// $router->postRoute('writeNewPost', ['controller'=>'postController', 'method'=>'addPost']);

$router->run();


//         case 'post':
//             $post->postPost();
//             break;

//         case 'testpost':
//             $post->show();
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
