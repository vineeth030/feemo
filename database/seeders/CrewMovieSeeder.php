<?php

namespace Database\Seeders;

use App\Models\Crew;
use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CrewMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $movies = Movie::all();
        // $directors = (new Crew)->directors()->get();
        // foreach ($movies as $movie) {
        //     $movie->crews()->attach($movie->id, ['role_id' => 'director']);
        // }
    }
}
