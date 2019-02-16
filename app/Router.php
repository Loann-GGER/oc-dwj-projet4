<?php

namespace App;

class Router
{
    private $action;
    private $getRoutes = array();
    private $postRoutes = array();

    public function __construct($action_url)
    {
        if ($action_url === NULL) {
            echo "Pas d'action URL";
        }
        else {
            $this->action = $action_url;
        }
    }

    public function getRoute(string $url, array $infos)
    {
        $this->getRoutes[$url] = $infos;
    }

    public function postRoute(string $url, array $infos) 
    {
        $this->postRoutes[$url] = $infos;
    }

    public function run()
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if(array_key_exists($this->action, $this->getRoutes)){
                $controller = 'Controller\\'.ucfirst($this->getRoutes[$this->action]['controller']);
                $controller = new $controller();
                $method = $this->getRoutes[$this->action]['method'];
                $controller->$method();
            }
        }
        elseif($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(array_key_exists($this->action, $this->postRoutes)){
                $controller = 'Controller\\'.ucfirst($this->postRoutes[$this->action]['controller']);
                $controller = new $controller();
                $method = $this->postRoutes[$this->action]['method'];
                $controller->$method(); 
            }
        }
        else {
            echo "404";
        }
    }
}