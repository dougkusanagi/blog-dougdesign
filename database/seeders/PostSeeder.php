<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::factory(200)
            ->create();

        $posts->each(function (Post $post) {
            $post->categories()->attach(
                Category::inRandomOrder()
                    ->limit(2)
                    ->get()
            );
        });
    }
}
