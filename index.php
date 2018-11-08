<?php 

require "vendor/autoload.php";

use Controller\BackendController;
use Controller\FrontendController;

$frontend = new FrontendController();
$backend = new BackendController();

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
            $backend->manageComments();
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

        default:
            $frontend->listPosts();
            break;
    }
}
else {
    $frontend->listPosts();
}
