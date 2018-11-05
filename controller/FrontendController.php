<?php

namespace Controller;

class FrontendController 
{
    public function listPosts()
    {
        require("view/frontend/indexFrontend.php");
    }

    public function singlePost()
    {
        require("view/frontend/single-post.php");
    }
}