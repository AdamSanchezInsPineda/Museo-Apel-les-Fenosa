<?php

require_once '../src/Router.php';
require_once '../src/controllers/UsuarioController.php';
require_once '../src/controllers/ObjetoController.php';
require_once '../src/controllers/VocabularioController.php';

$router = new Router();

$router->get('/', 'UsuarioController@index');

$router->post('/login', 'UsuarioController@login');

$router->get('/logout', 'UsuarioController@logout');

//registers
$router->get('/registers', 'ObjetoController@table');

$router->get('/registers/add', 'ObjetoController@create');

$router->get('/registers/{obra}', 'ObjetoController@new');

$router->get('/registers/{obra}/update', 'ObjetoController@update');

$router->get('/registers/{obra}/delete', 'ObjetoController@delete');

//Users
$router->get('/users', 'UsuarioController@table');

$router->get('/users/add', 'UsuarioController@create');

$router->get('/users/{user}', 'UsuarioController@new');

$router->get('/users/{obra}/update', 'UsuarioController@update');

$router->get('/users/{obra}/delete', 'UsuarioController@delete');

//Vocabularios
$router->get('/vocabulary', 'VocabularioController@index');

$router->dispatch();
