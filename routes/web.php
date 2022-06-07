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

$router->get('/', ['uses'=> 'BootcampController@home','as'=>'inicio']);

$router->group(['prefix'=> 'bootcamp'],function()use($router){
    $router->get('/info',function(){
        return "Información sobre el bootamp";
    });

});

$router->get('/bootcamp',['uses'=>'BootcampController@boot','as'=>'inicio']);

$router->group(['prefix'=> 'bootcamp'],function()use($router){
    $router->get('/cursos',function(){
        return "Información sobre los cursos del bootcamp";
    });

});

$router->group(['prefix'=> 'bootcamp'],function()use($router){
    $router->get('/equipo',function(){
        return "Información sobre nuestro equipo de trabajo";
    });

});
