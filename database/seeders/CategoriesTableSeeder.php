<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Uncategorized', 'image_path' => 'images/categories/uncategorized.jpg'],
            ['name' => 'Technology', 'image_path' => 'images/categories/technology.jpg'],
            ['name' => 'Travel', 'image_path' => 'images/categories/travel.jpg'],
            ['name' => 'Lifestyle', 'image_path' => 'images/categories/lifestyle.jpg'],
            ['name' => 'Education', 'image_path' => 'images/categories/education.jpg'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

