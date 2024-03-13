<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\RegisterController;

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

$router->group(['prefix' => 'auth'], function () use ($router) {

    $router->get("/register", "RegisterController@showRegisterForm");
    $router->post("/register", "RegisterController@register");
    $router->get("/login", "LoginController@showLoginForm");
    $router->post("/login", "LoginController@loginUser");

});

$router->group(["prefix" => "user"], function () use ($router) {

    $router->get("/", "UserController@getUsers");
    $router->post("/{id}", "UserController@updateUser");
    $router->put("/{id}", "UserController@updateUser");
    $router->delete("/{id}", "UserController@deleteUser");
    
});