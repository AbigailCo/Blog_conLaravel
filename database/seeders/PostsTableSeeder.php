<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Primer Post',
            'content' => 'Contenido del primer post',
            'poster' => 'Autor del post',
        ]);

        Post::create([
            'title' => 'Segundo Post',
            'content' => 'Contenido del segundo post',
            'poster' => 'Autor del post',
        ]);

        Post::create([
            'title' => 'Tercer Post',
            'content' => 'Contenido del tercer post',
            'poster' => 'Autor del post',
        ]);
    }
}
