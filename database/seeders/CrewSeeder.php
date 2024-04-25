<?php

namespace Database\Seeders;

use App\Models\Crew;
use App\Models\Movie;
use Database\Factories\CrewFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CrewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = Movie::all();

        foreach ($movies as $key => $movie) 
        {    
            Crew::factory()->create([
                'role' => 'director',
            ]);
            
            foreach (range(1, rand(1, 3)) as $key){
                Crew::factory()->create([
                    'role' => 'writer',
                ]);
            }
            
            foreach (range(1, rand(1, 3)) as $key){
                Crew::factory()->create([
                    'role' => 'producer',
                ]);
            }
            
            foreach (range(1, rand(3, 6)) as $key){
                Crew::factory()->create([
                    'role' => 'cast',
                ]);
            }
        }
    }
}
