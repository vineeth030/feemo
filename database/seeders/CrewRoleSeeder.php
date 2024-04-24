<?php

namespace Database\Seeders;

use App\Models\Crew;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CrewRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $crews = Crew::all();
        $roles = Role::all();

        $crews->each(function ($crew) use ($roles) {
            // Randomly attach roles to users
            $crew->roles()->attach($roles->random(rand(1, $roles->count()))->pluck('id')->toArray());
        });
    }
}
