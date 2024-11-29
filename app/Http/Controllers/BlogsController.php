<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index() {
        return view("index");
    }

    public function show($id) {
        return view("posts.show")->with("id", $id);
    }

    public function show_comments($id) {
        return view("posts/comments")->with("id", $id);
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
