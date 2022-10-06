<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
// Show ALL users
$router->get('/users', 'UserController@index');

//show Each users By ID
$router->get('/users/{id}', 'UserController@show');

//store users
$router->post('/users/create', 'UserController@store');

//update users
$router->put('/users/update/{id}', 'UserController@update');

// Delete
$router->delete('/users/delete/{id}', 'UserController@destroy');

$router->get('/', function () use ($router) {
    return $router->app->version();
});
