<?php

use Core\App;
use Core\Database\DatabaseConnection;
use Core\Database\MysqlDatabaseConnection;
use Core\Database\QueryBuilder;
use Core\Request;
use Core\Router;

date_default_timezone_set('Asia/Hong_Kong');

App::bind('request', Request::getSingleton());
App::bind('router', Router::getSingleton());

$pdo = MysqlDatabaseConnection::make(DatabaseConnection::resolve());
App::bind('database', new QueryBuilder($pdo));


