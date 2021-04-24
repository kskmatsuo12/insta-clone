<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//追記
use App\Post;
use Validator;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        return view('post/create');
    }

    public function create()
    {
        return view('post/create');
    }

    //追記
    public function store(PostRequest $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('post.create');
    }
}
