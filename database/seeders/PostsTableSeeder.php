<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::first();
        Post::create([
            'category_id' => $category->id,
            'title' => 'Primer Post',
            'content' => 'Contenido del primer post',
            'poster' => 'Autor del post',
        ]);

        Post::create([
            'category_id' => $category->id,
            'title' => 'Segundo Post',
            'content' => 'Contenido del segundo post',
            'poster' => 'Autor del post',
        ]);

        Post::create([
            'category_id' => $category->id,
            'title' => 'Tercer Post',
            'content' => 'Contenido del tercer post',
            'poster' => 'Autor del post',
        ]);
    }
}
