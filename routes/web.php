<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;

Route::view("/", "index")->name("index");

// Simple route to about page
Route::view("about", "about");

Route::name("posts.")
->prefix("posts")
->where(["id" => "[0-9]+"])
->group(function () {
    // Show a single blog page
    Route::get("{id}", function ($id) {
        return view("posts.show")
            ->with("id", $id);
    })->name("show");
    
    // Show comments for a single blog page
    Route::get("{id}/comments", function ($id) {
        return view("posts/comments")
            ->with("id", $id);
    })->name("comments.show");

    Route::get("create", [BlogsController::class, "create"])
        ->name("create");
    Route::post("", [BlogsController::class, "store"])
        ->name("store");
});

Route::fallback(function () {
    return "404 Page Not Found";
});