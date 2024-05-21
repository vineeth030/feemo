<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Post;
use App\Models\TextPost;
use App\Models\VideoPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = Movie::all();

        foreach ($movies as $key => $movie) {
            
            $textPost = TextPost::factory()->create();
            $post = Post::factory()->create(['movie_id' => $movie->id, 'content_type' => 'App\Models\TextPost', 'content_id' => $textPost->id]);

            $videoPost = VideoPost::factory()->create(['url' => 'https://www.youtube.com/watch?v=X3ysbLJl5XE']);
            $post = Post::factory()->create(['movie_id' => $movie->id, 'content_type' => 'App\Models\VideoPost', 'content_id' => $videoPost->id]);

            $textPost = TextPost::factory()->create();
            $post = Post::factory()->create(['movie_id' => $movie->id, 'content_type' => 'App\Models\TextPost', 'content_id' => $textPost->id]);
            
            $videoPost = VideoPost::factory()->create(['url' => 'https://www.youtube.com/watch?v=P0_L7G3R_44']);
            $post = Post::factory()->create(['movie_id' => $movie->id, 'content_type' => 'App\Models\VideoPost', 'content_id' => $videoPost->id]);
        }
    }
}
