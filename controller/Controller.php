<?php

namespace Controller;

abstract class Controller
{

    private $loader;
    protected $twig;

    public function __construct() {

        $this->loader = new \Twig_Loader_Filesystem('view');
        $this->twig = new \Twig_Environment($this->loader, array('cache' => false));
        $twigFunctionFlash = new \Twig_SimpleFunction('flash', function(){
            if ( isset($_SESSION['flash'])) {
                echo $_SESSION['flash'];
                $_SESSION['flash'] = '';
            }
        });
        $this->twig->addFunction($twigFunctionFlash);
        $this->twig->addGlobal('session',$_SESSION);
    }

    public function render($file, $datas = null ) {
        if($datas === null) {
            echo $this->twig->render($file);
        }     
        else {
            echo $this->twig->render($file, $datas);
        }
    }


}