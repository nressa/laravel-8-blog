<?php

namespace Database\Factories;

use App\Models\{User, Post, Category};
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostFactory extends Factory
{

    use HasFactory, Notifiable;

    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->unique()->slug(),
            'excerpt' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence()

        ];
    }
}
