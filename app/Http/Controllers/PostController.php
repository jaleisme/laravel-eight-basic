<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // $blog_posts = Post::all();
        $blog_posts = Post::latest()->get();
        return view('posts', ["title" => "Posts", "posts" => $blog_posts]);
    }

    public function show(Post $post){
        return view('post', ["title" => $post->title, "post" => $post]);
    }
}
