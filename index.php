<?php 

require "vendor/autoload.php";

use Controller\BackendController;
use Controller\FrontendController;

$frontend = new FrontendController();
$backend = new BackendController();

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'admin')
    {
        $backend->admin();
    }
    if ($_GET['action'] == 'writeNewPost')
    {
        $backend->writeNewPost();
    }
    if ($_GET['action'] == 'managePosts')
    {
        $backend->managePosts();
    }
    if ($_GET['action'] == 'manageComments')
    {
        $backend->manageComments();
    } 
}
else {
    $frontend->listPosts();
}

// ********** Divers Test **********
//require "view/test/testcomposer.php";