<?php

namespace App;

class Router
{
    private $action;
    private $getRoutes = array();
    private $postRoutes = array();


    public function __construct(string $action)
    {
        // check isset action
        $this->action = $action;
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
    }


}