<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(20)->create();

            //Seeder for Category
        Category::create([
            'name' => 'Horror',
            'slug' => 'horror'
        ]);

        Category::create([
            'name' => 'Funny',
            'slug' => 'funny'
        ]);

        Category::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);

        Category::create([
            'name' => 'Slice of Life',
            'slug' => 'slice-of-life'
        ]);

        Category::create([
            'name' => 'Adventure',
            'slug' => 'adventure'
        ]);

        Category::create([
            'name' => 'Angst',
            'slug' => 'angst'
        ]);
        User::factory(3)->create();
    }
}
