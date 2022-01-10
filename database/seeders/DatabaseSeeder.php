<?php

namespace Database\Seeders;

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
        \App\Models\Article::factory(20)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\Comment::factory(40)->create();
        //factory(App\Article::class, 20)->create();
        \App\Models\User::factory()->create([
            "name" => "Alice",
            "email" => "alice@gmail.com",
        ]);
        \App\Models\User::factory()->create([
            "name" => "Bob",
            "email" => "bob@gmail.com",
        ]);
        \App\Models\ArticleStatus::factory()->create([
            "name" => "Pending",
        ]);
        \App\Models\ArticleStatus::factory()->create([
            "name" => "Confirmed",
        ]);
        \App\Models\ArticleStatus::factory()->create([
            "name" => "Rejected",
        ]);   
    }
}
