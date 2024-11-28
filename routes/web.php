<?php

use Illuminate\Support\Facades\Route;


/*
ROUTE DEFINITIONS
*/


Route::get('/', function () {
    return "
        <h1>Hello world!</h1>
        <a href=" . route('about') . ">About Page</a><br>
        <a href=" . route('users.id.show', ["id" => 1, "thisShouldBeAQuery" => "test"]) . ">User ID 1 Page</a>
    ";
});

// When using routes ensure that you put the route parameters in

Route::get('about', function () {
    return 'About page';
})->name('about');

Route::get('products', function () {
    return 'Products page';
});

// // Route Parameters, Optional Route Parameters, and Regex Route Constrains
// Route::get('users/{id}', function ($id) {
//     return 'User ID: ' . $id;
// })
// ->where('id', '[0-9]+')
// ->name('users.id.show');

// Route::get('users/{username?}', function ($username = "defaultUser") {
//     return 'Username: ' . $username;
// })->where('username', '[A-Za-z]+');


/*
ROUTE GROUPS
*/

// Groups allow you to apply configurations to a collection of routes
// One use case is in applying middleware (user auth)
// However, in most cases it's clearer to assign middleware in the constructor of a controller

// You can assign a `prefix` to a group that all routes append to the front of their URL
// You can assign a `namespace` prefix for controllers that all share the same namespace
//  e.g. API/ControllerA@index & API/ControllerB@index
// You can assign a `name` prefix for route names
//  e.g. ['at' => 'users.'] will create a prefix for all names in the route group
Route::group(['prefix' => 'users'], function () {
    Route::get('{id}', function ($id) {
        return 'User ID: ' . $id;
    })
    ->where('id', '[0-9]+')
    ->name('users.id.show');

    Route::get('{username?}', function ($username = "defaultUser") {
        return 'Username: ' . $username;
    })->where('username', '[A-Za-z]+');
});