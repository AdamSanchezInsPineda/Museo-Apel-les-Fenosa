<?php

require_once '../src/Router.php';
require_once '../src/controllers/UsuarioController.php';
require_once '../src/controllers/ObjetoController.php';
require_once '../src/controllers/VocabularioController.php';
require_once '../src/controllers/ExposicionsController.php';


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

$router->get('/users/search', 'UsuarioController@searchDef');

$router->get('/users/search/{found}', 'UsuarioController@search');

$router->get('/users/add', 'UsuarioController@createView');

$router->post('/users/create', 'UsuarioController@create');

$router->get('/users/{user}', 'UsuarioController@updateView');

$router->post('/users/{user}/update', 'UsuarioController@update');

$router->get('/users/{user}/delete', 'UsuarioController@delete');

//Vocabularios
$router->get('/vocabulary', controller: 'VocabularioController@index');

$router->get('/vocabulary/autors', 'VocabularioController@indexAutors');

$router->get('/vocabulary/autors/add', 'VocabularioController@newAutor');

$router->post('/vocabulary/autors/create', 'VocabularioController@createAutor');

$router->get('/vocabulary/autors/{autor}', 'VocabularioController@editAutor');

$router->post('/vocabulary/autors/{autor}/update', 'VocabularioController@updateAutor');

$router->get('/vocabulary/autors/{autor}/delete', 'VocabularioController@deleteAutor');

$router->get('/vocabulary/llistas', 'VocabularioController@indexLlistas');

$router->get('/vocabulary/llista/add', 'VocabularioController@newLlista');

$router->post('/vocabulary/llista/create', 'VocabularioController@createLlista');

$router->post('/vocabulary/llista/{llista}/valors', 'VocabularioController@showLlista');

$router->get('/vocabulary/llista/{llista}', 'VocabularioController@editLlista');

$router->post('/vocabulary/llista/{llista}/update', 'VocabularioController@updateLlista');

$router->get('/vocabulary/llista/{llista}/delete', 'VocabularioController@deleteLlista');

//Exposicions

$router->get('/exposicions',  'ExposicionsController@index');

$router->get('/exposicions/add', 'ExposicionsController@newExposicio');

$router->post('/exposicions/create', 'ExposicionsController@createExposicio');

$router->get('/exposicions/{exposicio}', 'ExposicionsController@editExposicio');

$router->post('/exposicions/{exposicio}/update', 'ExposicionsController@updateExposicio');

$router->get('/exposicions/{exposicio}/delete', 'ExposicionsController@deleteExposicio');

$router->get('/exposicions/{exposicio}/bens', 'ExposicionsController@bensExposicio');

$router->get( '/exposicions/{exposicio}/bens/add', 'ExposicionsController@bensAddExposicio');

$router->post( '/exposicions/{exposicio}/bens/create', 'ExposicionsController@bensCreateExposicio');

$router->get('/exposicions/{exposicio}/bens/{objeto}/delete', 'ExposicionsController@bensDeleteExposicio');







$router->dispatch();
