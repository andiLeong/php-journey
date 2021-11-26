<?php
namespace Core;

use Exception;

class Router
{

    use HasSingleton;

    public $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function get($uri,$controller)
    {
        $uri = $this->trimUri($uri);
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri,$controller)
    {
        $uri = $this->trimUri($uri);
        $this->routes['POST'][$uri] = $controller;
    }

    public function redirect($uri,$method)
    {
        $uri = $this->trimUri($uri);
        if(array_key_exists($uri , $this->routes[$method])){
            return $this->call(...explode('@',$this->routes[$method][$uri]));
        }

        throw new Exception("can\'t find matching uri with [{$uri}], method is [{$method}]!");

    }

    private function trimUri($uri)
    {
        return trim($uri,'/');
    }

    private function call($controller,$method = null)
    {

        $controller = "\\App\\Controllers\\{$controller}";
        $instance = new $controller();

        if(!$method){
            return $instance();
        }

        if(method_exists($instance,$method)){
            return $instance->$method();
        }

        throw new Exception("can\'t find method [{$method}] within controller [{$controller}]!");
    }
}