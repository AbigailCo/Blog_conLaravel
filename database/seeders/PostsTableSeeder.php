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
        // Obtener la categorías
        $categoryTechnology = Category::where('name', 'Technology')->first();
        $categoryTravel = Category::where('name', 'Travel')->first();
        $categoryLifestyle = Category::where('name', 'Lifestyle')->first();
        $categoryEducation = Category::where('name', 'Education')->first();

    
        Post::create([
            'category_id' => $categoryTechnology->id,
            'title' => '¿Que se viene en tecnología',
            'content' => '¿¿ LARAVEL Y REACT ??',
            'poster' => 'señor x',
            'image_path' => $categoryTechnology->image_path 
        ]);


        Post::create([
            'category_id' => $categoryTravel->id,
            'title' => 'Viaja a ver a Messi',
            'content' => 'Copa America 2024',
            'poster' => 'señor x',
            'image_path' => $categoryTravel->image_path
        ]);

        Post::create([
            'category_id' => $categoryLifestyle->id,
            'title' => 'Ser joven es un estilo de vida',
            'content' => 'nose vos fijate',
            'poster' => 'señor x',
            'image_path' => $categoryLifestyle->image_path 
        ]);

        Post::create([
            'category_id' => $categoryEducation->id,
            'title' => 'Porque Laravel',
            'content' => 'Laravel es una elección sólida debido a su estructura organizada, documentación detallada y facilidad para construir y mantener aplicaciones web modernas y escalables',
            'poster' => 'señor x',
            'image_path' => $categoryEducation->image_path
        ]);
    }
}
