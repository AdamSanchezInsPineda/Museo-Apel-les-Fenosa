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

//Vocabularios
$router->get('/vocabulary', 'VocabularioController@index');

$router->get('/vocabulary/autors', 'VocabularioController@indexAutors');

$router->get('/vocabulary/autors/add', 'VocabularioController@newAutor');

$router->post('/vocabulary/autors/create', 'VocabularioController@createAutor');

$router->get('/vocabulary/autors/{autor}', 'VocabularioController@editAutor');

$router->post('/vocabulary/autors/{autor}/update', 'VocabularioController@updateAutor');

$router->get('/vocabulary/autors/{autor}/delete', 'VocabularioController@deleteAutor');

$router->get('/vocabulary/campsLlista', 'VocabularioController@indexCampsLlista');

$router->get('/vocabulary/campsLlista/add', 'VocabularioController@newCampsLlista');

$router->post('/vocabulary/campsLlista/create', 'VocabularioController@createCampsLlista');

$router->get('/vocabulary/campsLlista/{campLlista}', 'VocabularioController@editCampsLlista');

$router->post('/vocabulary/campsLlista/{campLlista}/update', 'VocabularioController@updateCampsLlista');

$router->get('/vocabulary/campsLlista/{campLlista}/delete', 'VocabularioController@deleteCampsLlista');






$router->get('/vocabulary/campsLlista', 'VocabularioController@indexCampsLlista');

$router->get('/vocabulary/campsLlista/add', 'VocabularioController@newCampsLlista');

$router->post('/vocabulary/campsLlista/create', 'VocabularioController@createCampsLlista');

$router->get('/vocabulary/campsLlista/{campLlista}', 'VocabularioController@editCampsLlista');

$router->post('/vocabulary/campsLlista/{campLlista}/update', 'VocabularioController@updateCampsLlista');

$router->get('/vocabulary/campsLlista/{campLlista}/delete', 'VocabularioController@deleteCampsLlista');






$router->get('/vocabulary/llistas', 'VocabularioController@indexLlistas');

$router->dispatch();
