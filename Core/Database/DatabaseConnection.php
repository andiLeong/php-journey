<?php
namespace Core\Database;

use Exception;

class DatabaseConnection
{

    public static function resolve()
    {
        $database = require "Core/Config/Database.php";
        $default = $database['default'];
        return $database[$default]
            ??=
            throw new Exception("can\'t find database configuration [{$default}]!");

    }

}