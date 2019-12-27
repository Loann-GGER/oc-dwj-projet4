<?php

namespace Controller;

class BackendController extends Controller
{    
    public function admin()
    {
        $this->render('backend/indexBackend.html');
    }
}