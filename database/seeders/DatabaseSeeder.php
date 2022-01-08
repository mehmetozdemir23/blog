<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $role_admin = Role::create(['role_name'=>'admin']);
        $role_user = Role::create(['role_name'=>'user']);

        $user = User::create([
            'user_last_name' => 'Ozdemir',
            'user_first_name' => 'Mehmet',
            'user_user_name' => 'Memo',
            'user_email' => 'm.ozd23@gmail.com',
            'user_password' => bcrypt('comolokko'),
            'role_id'=>$role_admin->id
        ]);

        $cat = Category::factory();
        $post = Post::factory()->create(['user_id'=>$user,'category_id'=>$cat]);
        $comment = Comment::factory()->create(['user_id'=>$user,'post_id'=>$post]);

    }
}
