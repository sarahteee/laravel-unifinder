<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Country;
use App\Models\University;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Sarah',
            'email' => 'sarahre1@hotmail.com',
            'password' => 'password'
        ]);

        Country::factory()->create([
            'countryName' => 'Canada',
        ]);

        Country::factory()->create([
            'countryName' => 'United States',
        ]);

        Country::factory()->create([
            'countryName' => 'United Kingdom',
        ]);

        Country::factory()->create([
            'countryName' => 'Australia',
        ]);

        Country::factory()->create([
            'countryName' => 'New Zealand',
        ]);
    }
}
