<?php


namespace Core;


trait HasSingleton
{

    private static $singleton;

    public static function getSingleton() {
        $self = get_class(new static);
        if (!isset(self::$singleton)) {
            self::$singleton = new $self();
        }

        return self::$singleton;
    }

}