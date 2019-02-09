<?php

namespace Controller;

use App\Session;

class BackendController extends Controller
{    
    public function admin()
    {
        $this->render('backend/indexBackend.html');
    }
}