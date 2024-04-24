<?php

namespace Database\Seeders;

use App\Models\Crew;
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
        Crew::factory(10)->create();
    }
}
