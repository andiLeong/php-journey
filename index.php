<?php

require 'vendor/autoload.php';
require "Core/Bootstrap.php";
require 'App/routes.php';

$request = resolve('request');
$router = resolve('router');

$router->redirect($request->uri(), $request->method());


