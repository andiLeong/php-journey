<?php
namespace Core;

class Request
{
    use HasSingleton;

    public function uri()
    {
        $uri = trim($_SERVER['REQUEST_URI'],'/');
        return parse_url($uri,PHP_URL_PATH);
    }

    public function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}