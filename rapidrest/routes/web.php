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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/{collection}', 'RapidRestController@index');
$app->get('/{collection}/{id}', 'RapidRestController@show');

$app->post('/{collection}', 'RapidRestController@store');
$app->put('/{collection}/{id}', 'RapidRestController@update');
$app->delete('/{collection}/{id}', 'RapidRestController@delete');
