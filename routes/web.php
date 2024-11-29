<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return "Blogs Index";
})->name("show");

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
});

Route::fallback(function () {
    return "404 Page Not Found";
});