<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index() {
        return "Hello, world!";
    }

    public function create() {
        return view("posts.create");
    }

    public function store() {
        // Receive data from posts.create submission form
        $data = request()->only(["title", "author", "blog"]);
        ['title' => $title, 'author' => $author] = $data;
        return "
            Submission Successful!
            <br>
            Title: $title
            <br>
            Author: $author
        ";
    }
}
