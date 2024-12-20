<?php


require_once __DIR__.'/../Autoload.php';


$router = new Router();

$router->get('/', 'UsuarioController@index');

$router->get("/getrol", "UsuarioController@getRol");

$router->post('/login', 'UsuarioController@login');

$router->get('/logout', 'UsuarioController@logout');

//registers
$router->get('/registers', 'ObjetoController@table');

$router->get('/registers/search', 'ObjetoController@searchDef');

$router->get('/registers/search/{found}', 'ObjetoController@search');

$router ->post('/registers/advancedSearch', 'ObjetoController@advancedeSearch');

$router->get('/registers/add', 'ObjetoController@createView');

$router->post('/registers/create', 'ObjetoController@create');

$router->get('/registers/llibreRegistre', "InformeController@llibre");

$router->get('/registers/{obra}/informepdf', "InformeController@index");

$router->get('/registers/{obra}/informeBasicpdf', "InformeController@basic");

$router->get('/registers/{obra}/prestecdoc', "InformeController@prestec");

$router->get('/registers/{obra}/updateView', 'ObjetoController@updateView');

$router->post('/registers/{obra}/update', 'ObjetoController@update');

$router->get('/registers/{obra}/delete', 'ObjetoController@delete');

$router->get('/registers/{obra}', 'ObjetoController@new');

$router->get('/registers/{obra}/fitxaBasica', 'ObjetoController@basica');


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
$router->get('/vocabularis', 'VocabularioController@indexVocabulario');

$router->get('/vocabularis/{vocabulario}', 'VocabularioController@showVocabulario');

$router->get('/vocabularis/{vocabulario}/add', 'VocabularioController@newVocabulario');

$router->post('/vocabularis/{vocabulario}/create', 'VocabularioController@createVocabulario');

$router->get('/vocabularis/{vocabulario}/{valor}', 'VocabularioController@editVocabulario');

$router->post('/vocabularis/{vocabulario}/{valor}/update', 'VocabularioController@updateVocabulario');

$router->get('/vocabularis/{vocabulario}/{valor}/delete', 'VocabularioController@deleteVocabulario');

//Exposicions

$router->get('/exposicions',  'ExposicionsController@index');

$router->get('/exposicions/search', 'ExposicionsController@searchDef');

$router->get('/exposicions/search/{found}', 'ExposicionsController@search');

$router->get('/exposicions/add', 'ExposicionsController@newExposicio');

$router->post('/exposicions/create', 'ExposicionsController@createExposicio');

$router->get('/exposicions/{exposicio}', 'ExposicionsController@editExposicio');

$router->post('/exposicions/{exposicio}/update', 'ExposicionsController@updateExposicio');

$router->get('/exposicions/{exposicio}/delete', 'ExposicionsController@deleteExposicio');

$router->get('/exposicions/{exposicio}/bens', 'ExposicionsController@bensExposicio');

$router->get('/exposicions/{exposicio}/bens/search', 'ExposicionsController@bensExposicioSearchDef');

$router->get('/exposicions/{exposicio}/bens/search/{found}', 'ExposicionsController@bensExposicioSearch');

$router->get( '/exposicions/{exposicio}/bens/add', 'ObjetoController@bensAddExposicio');

$router->get('/exposicions/{exposicio}/bens/add/search', 'ObjetoController@bensAddExposicioSearchDef');

$router->get('/exposicions/{exposicio}/bens/add/search/{found}', 'ObjetoController@bensAddExposicioSearch');

$router->post( '/exposicions/{exposicio}/bens/create', 'ExposicionsController@bensCreateExposicio');

$router->get('/exposicions/{exposicio}/bens/{objetoExposicion}/delete', 'ExposicionsController@bensDeleteExposicio');

// Ubicacions

$router->get('/ubicacions', 'UbicacionsController@index');

$router->get('/ubicacions/json', 'UbicacionsController@getUbicaciones');

$router->get('/ubicacions/new', 'UbicacionsController@new');

$router->post('/ubicacions/new', 'UbicacionsController@create');

$router->get('/ubicacions/{ubicacio}/edit', 'UbicacionsController@edit');

$router->post('/ubicacions/{ubicacio}/delete', 'UbicacionsController@destroy');

$router->post('/ubicacions/{ubicacio}', 'UbicacionsController@update');

$router->get('/ubicacions/{ubicacio}', 'UbicacionsController@show');



$router->dispatch();