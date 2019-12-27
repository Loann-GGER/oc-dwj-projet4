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
            throw new \InvalidArgumentException("Pas d'action URL");
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
       $this->launchController($_SERVER['REQUEST_METHOD']);
    }

    private function launchController($url_method)
    {
        $router_attribute = strtolower($url_method).'Routes';
        
        if(property_exists($this, $router_attribute)) {
            
            if(array_key_exists($this->action, $this->$router_attribute)) {
               
                $controller = 'Controller\\'.ucfirst($this->$router_attribute[$this->action]['controller']);
                $controller = new $controller();
                $method = $this->$router_attribute[$this->action]['method'];            
                $controller->$method(); 

            } else {
                header("location:erreur");
            }

        } else {
            throw new \InvalidArgumentException("Route request not good");
        }
    }
}