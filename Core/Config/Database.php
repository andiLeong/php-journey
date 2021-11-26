<?php

return [

    'default' => 'mysql',


    'mysql' => [
        'host' => 'localhost',
        'database' => 'myecom',
        'username' => 'root',
        'password' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
];