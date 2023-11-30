<?php

namespace Database\Seeders;

use App\Models\User; // Import the User model
use App\Models\Category; // Import the Category model
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *@return void
     */
    public function run()
    {
        $user = User::factory()->create();
        // BEGIN: ed8c6549bwf9
       $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

       $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

      $family =Category::create([
            'name' => 'family',
            'slug' => 'family'
        ]);

          Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi viverra vehicula nisl eget blandit. Mauris hendrerit accumsan est.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-second-post',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi viverra vehicula nisl eget blandit. Mauris hendrerit accumsan est.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-third-post',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi viverra vehicula nisl eget blandit. Mauris hendrerit accumsan est.'
        ]);
        
    }
}
         
