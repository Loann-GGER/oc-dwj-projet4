<?php 

require "vendor/autoload.php";

use App\Router;

session_start();

$action = $_GET['action'] ?? '';

$router = new Router($action);

$router->getRoute('', ['controller'=>'FrontendController', 'method'=>'index']);
$router->getRoute('index', ['controller'=>'FrontendController', 'method'=>'index']);
$router->getRoute('author', ['controller'=>'FrontendController', 'method'=>'author']);
$router->getRoute('singlepost', ['controller'=>'FrontendController', 'method'=>'singlepost']);
$router->getRoute('blog', ['controller'=>'FrontendController', 'method'=>'blog']);
$router->getRoute('mentionlegales', ['controller'=>'FrontendController', 'method'=>'mentionlegales']);

$router->getRoute('admin', ['controller'=>'BackendController', 'method'=>'admin']);

$router->getRoute('login', ['controller'=>'UserController', 'method'=>'login']);
$router->getRoute('manageComments', ['logout'=>'UserController', 'method'=>'logout']);

$router->getRoute('writeNewPost', ['controller'=>'PostController', 'method'=>'addPost']);
$router->getRoute('managePosts', ['controller'=>'PostController', 'method'=>'managePosts']);
$router->getRoute('delete', ['controller'=>'PostController', 'method'=>'deletePost']);

$router->getRoute('error', ['controller'=>'ErrorController', 'method'=>'errors']);

$router->getRoute('commentSignal', ['controller'=>'CommentController', 'method'=>'commentSignal']);


$router->postRoute('validelogin', ['controller'=>'UserController', 'method'=>'validelogin']);
$router->getRoute('logout', ['controller'=>'UserController', 'method'=>'logout']);
$router->postRoute('postComment', ['controller'=>'CommentController', 'method'=>'postComment']);



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

//         case 'viewComment':
//             $comment->viewComment();
//             break;

//         case 'aprouvecomment':
//             $comment->aprouvecomment();
//             break;
//         case 'refusecomment':
//             $comment->refusecomment();
//             break;
