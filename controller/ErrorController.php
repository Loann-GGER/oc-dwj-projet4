<?php

namespace Controller;

class ErrorController extends Controller
{
    public function errors()
    {
        $this->render('frontend/error.html');
    }
}