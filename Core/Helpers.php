<?php


use Core\App;

if(!function_exists('view')){

    function view($path,$data = [])
    {
        extract($data);
        require "App/Views/{$path}.view.php";
    }

}


if(!function_exists('resolve')){

    function resolve($key)
    {
        return App::get($key);
    }

}

if(!function_exists('now')){

    function now()
    {
        return \Carbon\Carbon::now();
    }

}