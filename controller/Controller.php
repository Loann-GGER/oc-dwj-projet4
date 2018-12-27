<?php

namespace Controller;

abstract class Controller
{

    private $loader;
    private $twig;

public function cons() {

   $this->loader = new \Twig_Loader_Filesystem('view');
   $this->twig = new \Twig_Environment($this->loader, array('cache' => true,));
}

public function render($file, $datas = null) {
    if($datas === null){
        echo $this->twig->render($file);
    }      
    else { 
        echo $this->twig->render($file, $datas);
    } 
}
//$this->twig->addGlobal('session', $session);
}