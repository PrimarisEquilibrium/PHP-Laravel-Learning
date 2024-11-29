<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;

Route::get("/", [BlogsController::class, "index"]);

// Simple route to about page
Route::view("about", "about");

Route::name("posts.")
->prefix("posts")
->where(["id" => "[0-9]+"])
->group(function () {
    // Show a single blog page
    Route::get("{id}", [BlogsController::class, "show"])->name("show");
    
    // Show comments for a single blog page
    Route::get("{id}/comments", [BlogsController::class, "show_comments"])->name("comments.show");

    // Routes for uploading blogs & Handling form submissions
    Route::get("create", [BlogsController::class, "create"])->name("create");
    Route::post("", [BlogsController::class, "store"])->name("store");
});

Route::fallback(function () {
    return "404 Page Not Found";
});