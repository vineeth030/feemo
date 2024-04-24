<?php

namespace Database\Seeders;

use App\Enums\CrewRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = CrewRole::all();

        foreach ($roles as $key => $role) {
            \App\Models\Role::factory()->create([
                'name' => $role
            ]);
        }
        
    }
}
