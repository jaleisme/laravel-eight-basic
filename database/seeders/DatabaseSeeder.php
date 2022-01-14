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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Jale',
            'email' => 'jaleisme.id@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
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
        Post::create([
            'title' => 'First Article',
            'slug' => 'first-article',
            'excerpt' => 'This is excerpt for first article',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero eligendi accusantium doloribus id odio magnam. Cupiditate qui ad voluptatibus nulla esse omnis adipisci, corporis veritatis voluptates dolorum eos expedita repellat, placeat exercitationem rem cum, quo sapiente error aliquid! Quam dolorem, tempora consectetur quibusdam temporibus fugiat facilis corrupti ab molestias iste quia nihil a autem non vitae illo in aliquam enim earum rem quaerat doloribus debitis, blanditiis repellat? Unde facilis possimus temporibus, a labore pariatur veritatis velit deserunt esse tenetur repudiandae optio quos necessitatibus, eveniet exercitationem nihil repellendus iusto quibusdam, excepturi expedita officiis delectus?</p><p>Incidunt, totam ab. Atque sed officiis voluptatibus voluptate explicabo voluptatum, repellendus pariatur cum. Dolore iste possimus dignissimos? Recusandae tempore quae eum incidunt provident cumque voluptates tenetur vitae corrupti? Odit iste necessitatibus quae velit explicabo eveniet, incidunt quasi vel! Qui velit doloribus odit, neque sequi, illum tempora nulla dolorem alias perferendis magni, a atque ullam possimus. Placeat error fuga id minus, reprehenderit voluptatum dolorum quam, doloremque aperiam cumque neque blanditiis praesentium soluta magnam. Excepturi non a at repellendus magni odio harum voluptates error, reprehenderit ratione commodi odit saepe eum numquam! Voluptate velit non, ducimus in molestias et soluta ullam error? Quasi, nam dolor nihil consequatur dolores ad minima.</p>',
            'post_category_id' => 3,
            'user_id' => 1,
        ]);
        Post::create([
            'title' => 'Second Article',
            'slug' => 'second-article',
            'excerpt' => 'This is excerpt for second article',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero eligendi accusantium doloribus id odio magnam. Cupiditate qui ad voluptatibus nulla esse omnis adipisci, corporis veritatis voluptates dolorum eos expedita repellat, placeat exercitationem rem cum, quo sapiente error aliquid! Quam dolorem, tempora consectetur quibusdam temporibus fugiat facilis corrupti ab molestias iste quia nihil a autem non vitae illo in aliquam enim earum rem quaerat doloribus debitis, blanditiis repellat? Unde facilis possimus temporibus, a labore pariatur veritatis velit deserunt esse tenetur repudiandae optio quos necessitatibus, eveniet exercitationem nihil repellendus iusto quibusdam, excepturi expedita officiis delectus?</p><p>Incidunt, totam ab. Atque sed officiis voluptatibus voluptate explicabo voluptatum, repellendus pariatur cum. Dolore iste possimus dignissimos? Recusandae tempore quae eum incidunt provident cumque voluptates tenetur vitae corrupti? Odit iste necessitatibus quae velit explicabo eveniet, incidunt quasi vel! Qui velit doloribus odit, neque sequi, illum tempora nulla dolorem alias perferendis magni, a atque ullam possimus. Placeat error fuga id minus, reprehenderit voluptatum dolorum quam, doloremque aperiam cumque neque blanditiis praesentium soluta magnam. Excepturi non a at repellendus magni odio harum voluptates error, reprehenderit ratione commodi odit saepe eum numquam! Voluptate velit non, ducimus in molestias et soluta ullam error? Quasi, nam dolor nihil consequatur dolores ad minima.</p>',
            'post_category_id' => 1,
            'user_id' => 2,
        ]);
        Post::create([
            'title' => 'Third Article',
            'slug' => 'third-article',
            'excerpt' => 'This is excerpt for third article',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero eligendi accusantium doloribus id odio magnam. Cupiditate qui ad voluptatibus nulla esse omnis adipisci, corporis veritatis voluptates dolorum eos expedita repellat, placeat exercitationem rem cum, quo sapiente error aliquid! Quam dolorem, tempora consectetur quibusdam temporibus fugiat facilis corrupti ab molestias iste quia nihil a autem non vitae illo in aliquam enim earum rem quaerat doloribus debitis, blanditiis repellat? Unde facilis possimus temporibus, a labore pariatur veritatis velit deserunt esse tenetur repudiandae optio quos necessitatibus, eveniet exercitationem nihil repellendus iusto quibusdam, excepturi expedita officiis delectus?</p><p>Incidunt, totam ab. Atque sed officiis voluptatibus voluptate explicabo voluptatum, repellendus pariatur cum. Dolore iste possimus dignissimos? Recusandae tempore quae eum incidunt provident cumque voluptates tenetur vitae corrupti? Odit iste necessitatibus quae velit explicabo eveniet, incidunt quasi vel! Qui velit doloribus odit, neque sequi, illum tempora nulla dolorem alias perferendis magni, a atque ullam possimus. Placeat error fuga id minus, reprehenderit voluptatum dolorum quam, doloremque aperiam cumque neque blanditiis praesentium soluta magnam. Excepturi non a at repellendus magni odio harum voluptates error, reprehenderit ratione commodi odit saepe eum numquam! Voluptate velit non, ducimus in molestias et soluta ullam error? Quasi, nam dolor nihil consequatur dolores ad minima.</p>',
            'post_category_id' => 2,
            'user_id' => 1,
        ]);
    }
}
