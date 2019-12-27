<?php 

require "vendor/autoload.php";

use App\Router;

session_start();

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

$action = $_GET['action'] ?? '';

$router = new Router($action);

// View FrontEnd
$router->getRoute('', ['controller'=>'FrontendController', 'method'=>'index']);
$router->getRoute('index', ['controller'=>'FrontendController', 'method'=>'index']);
$router->getRoute('biographie', ['controller'=>'FrontendController', 'method'=>'author']);
$router->getRoute('blog', ['controller'=>'FrontendController', 'method'=>'blog']);
$router->getRoute('singlepost', ['controller'=>'FrontendController', 'method'=>'singlepost']);
$router->getRoute('mentionlegales', ['controller'=>'FrontendController', 'method'=>'mentionlegales']);

// View BackEnd
$router->getRoute('admin', ['controller'=>'BackendController', 'method'=>'admin']);
$router->getRoute('writeNewPost', ['controller'=>'PostController', 'method'=>'addPost']);
$router->getRoute('viewPosts', ['controller'=>'PostController', 'method'=>'viewPosts']);
$router->getRoute('updatePost', ['controller'=>'PostController', 'method'=>'updatePost']);
$router->getRoute('manageComments', ['controller'=>'CommentController', 'method'=>'manageComments']);

// Action FrontEnd
$router->postRoute('postComment', ['controller'=>'CommentController', 'method'=>'postComment']);
$router->getRoute('commentSignal', ['controller'=>'CommentController', 'method'=>'commentSignal']);

// Action BackEnd
$router->postRoute('post', ['controller'=>'PostController', 'method'=>'postPost']);
$router->postRoute('updatePosts', ['controller'=>'PostController', 'method'=>'updatePosts']);
$router->getRoute('delete', ['controller'=>'PostController', 'method'=>'delete']);
$router->getRoute('aprouvecomment', ['controller'=>'CommentController', 'method'=>'aprouvecomment']);
$router->getRoute('refusecomment', ['controller'=>'CommentController', 'method'=>'refusecomment']);

// Auth
$router->getRoute('login', ['controller'=>'UserController', 'method'=>'login']);
$router->postRoute('validelogin', ['controller'=>'UserController', 'method'=>'validelogin']);
$router->getRoute('logout', ['controller'=>'UserController', 'method'=>'logout']);

// Global 
$router->getRoute('erreur', ['controller'=>'ErrorController', 'method'=>'errors']);

$router->run();