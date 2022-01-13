<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
class Post
{
    private static $blog_posts = [
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

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $post = static::all();
        return $post->firstWhere('slug', $slug);
    }
}
