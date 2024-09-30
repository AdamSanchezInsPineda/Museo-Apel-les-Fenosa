<?php

require_once '../src/Router.php';
require_once '../src/controllers/HomeController.php';
require_once '../src/controllers/RegisterController.php';

$router = new Router();

$router->get('/', 'HomeController@index');

$router->post('/login', 'HomeController@login');

$router->get('/registers', 'RegisterController@table');

$router->get('/registers/{obra}', 'HomeController@register');

$router->dispatch();
