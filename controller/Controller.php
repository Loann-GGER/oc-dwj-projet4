<?php

namespace Controller;

abstract class Controller
{

    private $loader;
    protected $twig;

    public function cons() {

        $this->loader = new \Twig_Loader_Filesystem('view');
        $this->twig = new \Twig_Environment($this->loader, array('cache' => false));
    }

    public function render($file) {
       
       // if($datas === null) {
        echo $file;    
        echo $this->twig->render($file);

       // }     
        // else { 
        //     echo $this->twig->render($file, $datas);
        // } 
    }
}