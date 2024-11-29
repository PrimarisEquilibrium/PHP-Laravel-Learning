<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogResourceController;

// Home page
Route::view("/", "index");

// Simple route to about page
Route::view("about", "about");

// Routes for blog posts
Route::resource("posts", BlogResourceController::class)
    ->only(["index", "show", "create", "store"])
    ->where(["id" => "[0-9]+"])
    ->parameters(["posts" => "id"]);

Route::fallback(function () {
    return "404 Page Not Found";
});