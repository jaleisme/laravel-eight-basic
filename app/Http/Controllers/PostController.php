<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $title = '';
        if(request('category')){
            $category = PostCategory::firstWhere('slug', request('category'));
            $title = ' in "'.$category->name.'"';
        }
        if(request('user')){
            $user = User::firstWhere('username', request('user'));
            $title = ' from "'.$user->name.'"';
        }
        $blog_posts = Post::latest()->filter(request(['search', 'category', 'user']));
        return view('posts', ["title" => "All Posts ".$title, "posts" => $blog_posts->paginate(7)->withQueryString(), "active" => 'posts']);
    }

    public function show(Post $post){
        return view('post', ["title" => $post->title, "post" => $post, "active" => 'posts']);
    }
}
