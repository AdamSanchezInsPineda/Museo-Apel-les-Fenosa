<?php

require_once '../src/Router.php';
require_once '../src/controllers/UsuarioController.php';
require_once '../src/controllers/ObjetoController.php';

$router = new Router();

$router->get('/', 'UsuarioController@index');

$router->post('/login', 'UsuarioController@login');

$router->get('/logout', 'UsuarioController@logout');

$router->get('/registers', 'ObjetoController@table');

$router->get('/registers/add', 'ObjetoController@new');

$router->get('/registers/{obra}', 'ObjetoController@register');

$router->get('/users', 'UsuarioController@table');


$router->dispatch();
