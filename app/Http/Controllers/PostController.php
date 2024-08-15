<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'name' => 'Wildan Syukri Niam blogs',
            'title' => 'Blog',
            'posts' => Post::all()

        ]);
    }

    public function show($slug)
    {
        return view('post', [
            'title' => 'Blog',
            'post' => Post::find($slug)
        ]);
    }
}
