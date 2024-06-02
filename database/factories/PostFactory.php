<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'poster'=>'post/'. $this->faker->image('public/storage/post', 640,480,false),
            'habilitated' => $this->faker->boolean,
            'content' => $this->faker->paragraph,
        ];
    }
}
