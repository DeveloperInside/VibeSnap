<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Vibes;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()
            ->count(25)
            ->hasVibes(10)
            ->create();



        // User::factory()->create([
        //     'name' => 'Enes Hancer',
        //     'email' => 'enesm.hancer@gmail.com',
        //     'password' => 'enes123.'
        // ]);

        // TODO: create a factory for vibes
        // Vibes::factory(3)->create();
    }
}
