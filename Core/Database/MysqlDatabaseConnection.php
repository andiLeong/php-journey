<?php
namespace Core\Database;

use PDO;
use PDOException;

class MysqlDatabaseConnection
{

    public static function make(array $config)
    {
        try {
            return new PDO(
                "mysql:host={$config['host']};dbname={$config['database']}",
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch(PDOException $e) {
            die( "Connection failed: " . $e->getMessage());
        }
    }

}