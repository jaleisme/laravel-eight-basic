<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\PostCategory;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});
Route::get('/about', function () {
    return view('about', ["title" => "About", "name" => "Jale", "email" => "jaleisme.id@gmail.com", "site" => "jaleisme.github.io"]);
});
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => PostCategory::all(),
        "active" => 'categories'

    ]);
});
Route::get('/category/{postCategory:slug}', function(PostCategory $postCategory){
    return view('posts', [
        'title' => 'Post by Category "'.$postCategory->name.'"',
        'posts' => $postCategory->posts->load('postCategory', 'user'),
        "active" => 'categories'
    ]);
});
Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => 'Post by "'.$author->name.'"',
        'posts' => $author->posts->load('postCategory', 'user'),
        "active" => 'posts'
    ]);
});
