<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Post::create([
            'title' => 'First Post',
            'poster' => 'poster1.jpg',
            'habilitated' => true,
            'content' => 'This is the content of the first post.'
        ]);

        Post::create([
            'title' => 'Second Post',
            'poster' => 'poster2.jpg',
            'habilitated' => false,
            'content' => 'This is the content of the second post.'
        ]);

        Post::create([
            'title' => 'Third Post',
            'poster' => 'poster3.jpg',
            'habilitated' => true,
            'content' => 'This is the content of the third post.'
        ]);
    }
}
