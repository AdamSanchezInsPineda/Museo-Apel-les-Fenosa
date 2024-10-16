<?php

require_once '../src/Router.php';
require_once '../src/controllers/UsuarioController.php';
require_once '../src/controllers/ObjetoController.php';

$router = new Router();

$router->get('/', 'UsuarioController@index');

$router->post('/login', 'UsuarioController@login');

$router->get('/logout', 'UsuarioController@logout');

//registers
$router->get('/registers', 'ObjetoController@table');

$router->post('/registers/add', 'ObjetoController@create');

$router->get('/registers/{obra}', 'ObjetoController@new');

$router->get('/registers/{obra}/update', 'ObjetoController@update');

$router->get('/registers/{obra}/delete', 'ObjetoController@delete');

//Users
$router->get('/users', 'UsuarioController@table');

$router->get('/users/add', 'UsuarioController@createView');

$router->post('/users/create', 'UsuarioController@create');

$router->get('/users/{user}', 'UsuarioController@updateView');

$router->post('/users/{user}/update', 'UsuarioController@update');

$router->get('/users/{user}/delete', 'UsuarioController@delete');

$router->dispatch();
