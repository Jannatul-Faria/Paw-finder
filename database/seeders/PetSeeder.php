<?php

namespace Database\Seeders;

use App\Models\Pet;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Pet::factory()->count(1000)->create();
    }
}