<?php

namespace Database\Seeders;

use App\Models\Category;
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
        User::factory(3)->create();

        Category::create([
            'name' => "Web Programming",
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => "Gaming",
            'slug' => 'gaming'
        ]);

        Category::create([
            'name' => "Lifestyle",
            'slug' => 'lifestyle'
        ]);

        Post::factory(20)->create();
    }
}
