<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraph(20),
            'category' => fake()->realText(10),
            'user_id' => User::factory()
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Article $article) {
            $directory = "article_images";
            $file = Storage::putFileAs($directory, fake()->image(width: 400, height: 400), "$article->id.png");
            $article->image = basename($file);
            $article->save();
        });
    }
}
