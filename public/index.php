<?php

require_once '../src/Router.php';
require_once '../src/controllers/UsuarioController.php';
require_once '../src/controllers/ObjetoController.php';

$router = new Router();

$router->get('/', 'UsuarioController@index');

$router->post('/login', 'UsuarioController@login');

$router->get('/logout', 'UsuarioController@logout');

$router->get('/registers', 'ObjetoController@table');

$router->get('/registers/add', 'ObjetoController@create');

$router->get('/registers/{obra}', 'ObjetoController@new');

$router->get('/users', 'UsuarioController@table');

$router->get('/users/add', 'UsuarioController@create');

$router->get('/users/{user}', 'UsuarioController@new');

$router->dispatch();
