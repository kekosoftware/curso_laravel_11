<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(Request $request)
    {
        // dd($request->all());
        // dd($request->get('for-my'));
        // dd($request->user());
        // dd($request->user()->id);

        if ($request->get('for-my')) {
            $posts = $request->user()->posts()->latest()->get();
        } else {
            $posts = Post::latest()->get();
        }
        // compact('posts') es lo mismo que escribir ['posts' = $posts];
        return view('dashboard', compact('posts'));
    }
}
