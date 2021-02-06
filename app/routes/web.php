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

$router->get(
    '/',
    function () use ($router) {
        return "Hello from swk dev team";
    }
);

$router->get('/videos', 'VideoController@show');
$router->post('/videos', 'VideoController@create');
$router->put('/videos/{id}', 'VideoController@update');
$router->delete('/videos/{id}', 'VideoController@delete');