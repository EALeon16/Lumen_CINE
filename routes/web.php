<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix'=>'cine'], function($router){
    $router->get('/getAll','CarteleraController@getAll');
    $router->get('/getCartelera','CarteleraController@getCartelera');
    $router->post('/createCliente','PersonaController@createPersona');
    $router->get('/getComprobante/{user}','HistorialController@getComprobante');
    //$router->get('/getComprobante','HistorialController@getHistorialC');

    
});


$router->group(['prefix'=>'usuarios'], function($router){
    $router->post('/ingresar','UserController@login');
    $router->get('/getPersona/{username}','PersonaController@getPersona');
    $router->post('/editPersona/{usernames}','PersonaController@editPersona');
    
});

