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

$router->get('/', function () use ($router) {
    // return $router->app->version();
    $indiaPinode = [];
    $indiaPinode = \App\Models\IndiaPinode::paginate(15);
    return view('welomeIndia',compact('indiaPinode'))->with('no',1);
});

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    //the route below is for viewing all users
    $router->get('indiapinode/index', 'IndiaPinodeController@index');
});