<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
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
      $user = User::factory()->create([
         'name'=>'John Doe',
         'username'=>'JohnDoee'
       ]);
      Post::factory(9)->create([
        'user_id'=>$user->id,
      ]);
      Category::factory(2)->create();
      Comment::factory(2)->create();
    }
}
