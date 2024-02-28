<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Mehmet Ozdemir',
            'email' => 'm.ozd23@gmail.com',
            'password' => bcrypt('password')
        ]);
        Article::factory()->create(['user_id' => $user->id]);
        Article::factory(10)
            ->create();
    }
}
