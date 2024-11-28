<?php

use Illuminate\Support\Facades\Route;

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

// Route Parameters, Optional Route Parameters, and Regex Route Constrains
Route::get('users/{id}', function ($id) {
    return 'User ID: ' . $id;
})
->where('id', '[0-9]+')
->name('users.id.show');

Route::get('users/{username?}', function ($username = "defaultUser") {
    return 'Username: ' . $username;
})->where('username', '[A-Za-z]+');