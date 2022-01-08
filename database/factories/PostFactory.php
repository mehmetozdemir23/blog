<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'post_title' => $this->faker->sentence(),
            'post_slug' => $this->faker->slug(),
            'post_excerpt' => $this->faker->paragraph(),
            'post_body' => implode(' ',$this->faker->words(500))
        ];
    }
}
