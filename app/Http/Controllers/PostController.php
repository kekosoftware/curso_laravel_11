<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required'
        ]);

        // \App\Models\Post::create()...
        $request->user()->posts()->create($request->all());

        return back();
    }
}
