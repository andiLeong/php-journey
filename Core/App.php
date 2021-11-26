<?php

namespace Core;

use Exception;

class App
{
    protected static $containers = [];

    public static function bind($key,$value)
    {
        static::$containers[$key] = $value;
    }

    public static function get($key)
    {

        if(array_key_exists($key,static::$containers)){
            return static::$containers[$key];
        }
        throw new exception("[{$key}] items isn't found");
    }


}