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

$router->get('/random', function () use ($router) {
    return \App\Gkk::inRandomOrder()->first();
});

$router->get('/gkk/{id}', function ($id) use ($router) {
    return \App\Gkk::where('id', $id)->first();
});
