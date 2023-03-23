<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $published = Post::where("status", "=", "Publish")->get();
        $drafted = Post::where("status", "=", "Draft")->get();
        $trashed = Post::where("status", "=", "Trash")->get();
        
        return view("article.all_post", compact("published", "drafted", "trashed"));
    }

    public function preview() {
        $published = Post::where("status", "=", "Publish")->paginate(5);
        return view('article.preview', compact('published'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("article.add_post");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            //code...
            $post = new Post();
            $post->title = $request->title;
            $post->content = $request->content;
            $post->category = $request->category;
            $post->status = $request->status;
            $post->save();
            return redirect()->route("article.all");
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        return view("article.edit_post", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->status = $request->status;
        $post->save();
        return redirect()->route("article.all");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        try {
            //code...
            $post->status = "Trash";
            $post->save();
            return redirect()->route("article.all");
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
