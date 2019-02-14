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

$router->getRoute('writeNewPost', ['controller'=>'PostController', 'method'=>'addPost']);
$router->getRoute('managePosts', ['controller'=>'PostController', 'method'=>'managePosts']);
$router->postRoute('delete', ['controller'=>'PostController', 'method'=>'delete']);

$router->getRoute('error', ['controller'=>'ErrorController', 'method'=>'errors']);

$router->getRoute('commentSignal', ['controller'=>'CommentController', 'method'=>'commentSignal']);
$router->getRoute('manageComments', ['controller'=>'CommentController', 'method'=>'manageComments']);

$router->postRoute('validelogin', ['controller'=>'UserController', 'method'=>'validelogin']);
$router->getRoute('logout', ['controller'=>'UserController', 'method'=>'logout']);
$router->postRoute('postComment', ['controller'=>'CommentController', 'method'=>'postComment']);

$router->getRoute('post', ['controller'=>'PostController', 'method'=>'postPost']);
$router->getRoute('viewPosts', ['controller'=>'PostController', 'method'=>'viewPosts']);
$router->getRoute('writeUpdatePosts', ['controller'=>'PostController', 'method'=>'writeUpdatePosts']);

$router->getRoute('viewdelete', ['controller'=>'PostController', 'method'=>'viewdelete']);



$router->getRoute('voirlesposts', ['controller'=>'PostController', 'method'=>'voirlesposts']);
$router->getRoute('updatePosts', ['controller'=>'PostController', 'method'=>'updatePosts']);
$router->getRoute('viewComment', ['controller'=>'CommentController', 'method'=>'viewComment']);
$router->getRoute('aprouvecomment', ['controller'=>'CommentController', 'method'=>'aprouvecomment']);
$router->getRoute('refusecomment', ['controller'=>'CommentController', 'method'=>'refusecomment']);


$router->run();