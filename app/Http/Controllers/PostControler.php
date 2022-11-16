<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostControler extends Controller
{
    public function index()
    {
        $posts = post::latest();

        if(request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%');
        }

        return view('posts', [
            "title" => "All Posts",
            "active" => 'posts',
            "posts" => $posts->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "single post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
