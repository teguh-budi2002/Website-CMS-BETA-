<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(1, 3)),
            'slug' => $this->faker->slug(),
            'author' => $this->faker->name(),
            'body' => $this->faker->paragraph(mt_rand(3, 8)),
            'category_id' => mt_rand(1, 2)
        ];
    }
}
