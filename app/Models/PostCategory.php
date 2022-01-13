<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostCategory extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
