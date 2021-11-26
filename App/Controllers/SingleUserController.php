<?php
namespace App\Controllers;

class SingleUserController
{

    public function __invoke()
    {
        die( 'calling from a invoke controller');
    }
}