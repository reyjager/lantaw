<?php


namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Create 50 posts using the PostFactory
        Post::factory()->count(50)->create();
    }
}
