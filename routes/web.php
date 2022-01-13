<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/posts', function () {
    $blog_posts = [
        [
            "title" => "First Post",
            "slug" => "first-post",
            "author" => "Jale",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro alias debitis quia. Distinctio itaque vitae optio quisquam eos facilis amet doloribus odio cum sit temporibus reiciendis quia labore magni vero explicabo consectetur esse doloremque ut, eius maxime quaerat laudantium mollitia. Ab, maxime totam minima dolor libero cum eaque saepe debitis pariatur vitae ipsam sit rem tempore dolore repellat ad quos illo sint similique. Error in libero nostrum magni quis, a exercitationem, autem, nesciunt consectetur beatae cupiditate necessitatibus ducimus itaque culpa.",
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "author" => "Faizal",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro alias debitis quia. Distinctio itaque vitae optio quisquam eos facilis amet doloribus odio cum sit temporibus reiciendis quia labore magni vero explicabo consectetur esse doloremque ut, eius maxime quaerat laudantium mollitia. Ab, maxime totam minima dolor libero cum eaque saepe debitis pariatur vitae ipsam sit rem tempore dolore repellat ad quos illo sint similique. Error in libero nostrum magni quis, a exercitationem, autem, nesciunt consectetur beatae cupiditate necessitatibus ducimus itaque culpa.",
        ]
    ];
    return view('posts', ["title" => "Posts", "posts" => $blog_posts]);
});

Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "First Post",
            "slug" => "first-post",
            "author" => "Jale",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro alias debitis quia. Distinctio itaque vitae optio quisquam eos facilis amet doloribus odio cum sit temporibus reiciendis quia labore magni vero explicabo consectetur esse doloremque ut, eius maxime quaerat laudantium mollitia. Ab, maxime totam minima dolor libero cum eaque saepe debitis pariatur vitae ipsam sit rem tempore dolore repellat ad quos illo sint similique. Error in libero nostrum magni quis, a exercitationem, autem, nesciunt consectetur beatae cupiditate necessitatibus ducimus itaque culpa.",
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "author" => "Faizal",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro alias debitis quia. Distinctio itaque vitae optio quisquam eos facilis amet doloribus odio cum sit temporibus reiciendis quia labore magni vero explicabo consectetur esse doloremque ut, eius maxime quaerat laudantium mollitia. Ab, maxime totam minima dolor libero cum eaque saepe debitis pariatur vitae ipsam sit rem tempore dolore repellat ad quos illo sint similique. Error in libero nostrum magni quis, a exercitationem, autem, nesciunt consectetur beatae cupiditate necessitatibus ducimus itaque culpa.",
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    };

    return view('post', ["title" => $new_post["title"], "post" => $new_post]);
});
