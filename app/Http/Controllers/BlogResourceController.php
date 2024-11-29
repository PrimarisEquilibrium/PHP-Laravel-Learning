<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only(["title", "author", "blog"]);
        ['title' => $title, 'author' => $author] = $data;
        return "
            Submission Successful!
            <br>
            Title: $title
            <br>
            Author: $author
        ";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view("posts.show")->with("id", $id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
