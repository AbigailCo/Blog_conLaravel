<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\PostsTableSeeder;
use Database\Seeders\UsersTableSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::deleteDirectory('user');
    Storage::makeDirectory('user');


        $this->call(CategoriesTableSeeder::class); //categories va primero si o si
        $this->call(PostsTableSeeder::class);
        $this->call(UsersTableSeeder::class,);

        User::factory(3)->create();

    }
}
