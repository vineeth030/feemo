<?php

namespace Database\Seeders;

use App\Models\Crew;
use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CrewMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = Movie::all();

        foreach ($movies as $key => $movie) 
        {
            $randomDirector = Crew::where('role', 'director')->inRandomOrder()->first();

            DB::table('crew_movie')->insert([
                'crew_id' => $randomDirector->id,
                'movie_id' => $movie->id
            ]);
            
            $randomWriters = Crew::where('role', 'writer')->inRandomOrder()->take(rand(1, 3))->get();

            foreach ($randomWriters as $key => $writer) {
                DB::table('crew_movie')->insert([
                    'crew_id' => $writer->id,
                    'movie_id' => $movie->id
                ]);
            }
            
            $randomProducers = Crew::where('role', 'producer')->inRandomOrder()->take(rand(1, 4))->get();

            foreach ($randomProducers as $key => $producer) {
                DB::table('crew_movie')->insert([
                    'crew_id' => $producer->id,
                    'movie_id' => $movie->id
                ]);
            }

            $randomCast = Crew::where('role', 'cast')->inRandomOrder()->take(rand(4, 7))->get();

            foreach ($randomCast as $key => $cast) {
                DB::table('crew_movie')->insert([
                    'crew_id' => $cast->id,
                    'movie_id' => $movie->id
                ]);
            }
        }
    }
}
