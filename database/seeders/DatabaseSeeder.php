<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //SE ELIMINAN LAS CARPETAS (porque despues de cada migracion se crean imagenes y no se borran)
          //eliminar carpeta articles 
          Storage::deleteDirectory('articles');

          //eliminar la carpeta categories
          Storage::deleteDirectory('categories');
         
  
              //crear carpeta articles
          Storage::makeDirectory('articles');
  
              //Crea la carpeta categories
          Storage::makeDirectory('categories');
        //aqui llamamos al seeader
       $this ->call(UserSeeder::class);

       //llamamos a los factories van ordenados segun su dependencia
       Category::factory(3)->create();
       Article::factory(10)->create();
      
       Comment::factory(10)->create();
      

    }
}
