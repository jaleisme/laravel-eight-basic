<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Jale',
        //     'email' => 'jaleisme.id@gmail.com',
        //     'password' => bcrypt('admin'),
        // ]);
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('admin'),
        // ]);
        PostCategory::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        PostCategory::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        PostCategory::create([
            'name' => 'Writing',
            'slug' => 'writing'
        ]);
        User::factory(5)->create();
        Post::factory(20)->create();
    }
}
