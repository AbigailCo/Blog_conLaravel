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
            'poster' => 'John Doe',
            'habilited' => false,
            'content' => 'This is the content of the first post.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Post::create([
            'title' => 'Second Post',
            'poster' => 'Jane Smith',
            'habilited' => true,
            'content' => 'This is the content of the second post.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

