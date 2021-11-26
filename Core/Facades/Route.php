<?php

namespace Core\Facades;

class Route
{
    public function getInstance()
    {
        return resolve('router');
    }

    public static function __callStatic($method, $arguments)
    {
        (new static)->getInstance()->$method(...$arguments);
    }
}