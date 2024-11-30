<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class BlogResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view("posts.index", ["blogs" => $blogs]);
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
        $blog = new Blog($request->only(["title", "author", "blog"]));
        $blog->save();
        return redirect()->route("posts.show", ["blog" => $blog]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view("posts.show", ["blog" => $blog]);
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
