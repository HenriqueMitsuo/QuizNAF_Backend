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

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->post('/register', ['uses' => 'UsersController@store']);
    $router->post('/login', ['uses' => 'UsersController@login']);

    $router->group(['prefix' => 'quiz', 'middleware' => 'verifyJwt'], function () use ($router){
        $router->get('/', ['uses' => 'QuizController@index']);
        $router->get('/{id}', ['uses' => 'QuizController@show']);
        $router->post('/', ['uses' => 'QuizController@store']);
        $router->put('/{id}', ['uses' => 'QuizController@update']);
        $router->delete('/{id}', ['uses' => 'QuizController@delete']);
    });
  
    $router->group(['prefix' => 'questions', 'middleware' => 'verifyJwt'], function () use ($router){
        $router->get('/', ['uses' => 'QuestionsController@index']);
        $router->get('/{id}', ['uses' => 'QuestionsController@show']);
        $router->post('/', ['uses' => 'QuestionsController@store']);
        $router->put('/{id}', ['uses' => 'QuestionsController@update']);
        $router->delete('/{id}', ['uses' => 'QuestionsController@delete']);
    });

    $router->group(['prefix' => 'users', 'middleware' => 'verifyJwt'], function () use ($router){
        $router->get('/{id}', ['uses' => 'UsersController@show']);
        $router->put('/{id}', ['uses' => 'UsersController@update']);
        $router->delete('/{id}', ['uses' => 'UsersController@delete']);
    });
});