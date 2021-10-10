<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
            'name' => 'Andi Hartono',
            'email' => 'andihartono21@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Dewi',
            'email' => 'dewi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat veritatis cupiditate obcaecati molestias laudantium expedita corporis enim atque repudiandae reiciendis odio hic quis tenetur officiis dolores eos aspernatur quidem esse accusamus, nihil a? Ratione quisquam impedit velit vero corrupti fugit mollitia odio doloribus quae! Fugiat exercitationem dolor accusamus id autem.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat veritatis cupiditate obcaecati molestias laudantium expedita corporis enim atque repudiandae reiciendis odio hic quis tenetur officiis dolores eos aspernatur quidem esse accusamus, nihil a? Ratione quisquam impedit velit vero corrupti fugit mollitia odio doloribus quae! Fugiat exercitationem dolor accusamus id autem.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat veritatis cupiditate obcaecati molestias laudantium expedita corporis enim atque repudiandae reiciendis odio hic quis tenetur officiis dolores eos aspernatur quidem esse accusamus, nihil a? Ratione quisquam impedit velit vero corrupti fugit mollitia odio doloribus quae! Fugiat exercitationem dolor accusamus id autem.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
