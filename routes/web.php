<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

Route::get("/", function () {
    return "Blogs Index";
})->name("show");

Route::name("posts.")->prefix("posts")->where(["id" => "[0-9]+"])->group(function () {
    // Show a single blog page
    Route::get("{id}", function ($id) {
        $comments_route = URL::route("posts.comments.show", [$id]);
        return (
            "<h2>Blog #" 
            . $id . "</h2>"
            . "<a href='" . $comments_route . "'>Comments</a>"
        );
    })->name("show");
    
    // Show comments for a single blog page
    Route::get("{id}/comments", function ($id) {
        return "<h2>Comments for Blog #" . $id . "</h2>";
    })->name("comments.show");
});

Route::fallback(function () {
    return "404 Page Not Found";
});