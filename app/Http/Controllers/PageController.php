<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        $posts = Post::latest()->get();

        // compact('posts') es lo mismo que escribir ['posts' = $posts];
        return view('dashboard', compact('posts'));
    }
}
