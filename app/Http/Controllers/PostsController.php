<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($id)
    {
        return view('post', [
            'post' => Post::findOrFail($id)
        ]);
    }
    public function index()
    {
        return view('posts', [
            'posts' => Post::all()
        ]);
    }
}
