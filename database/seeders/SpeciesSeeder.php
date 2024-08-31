<?php

namespace Database\Seeders;

use App\Models\Species;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $species = [
            ['name' => 'Dog'],
            ['name' => 'Cat'],
            ['name' => 'Bird'],
            ['name' => 'Fish'],
            ['name' => 'Rabbit'],
            ['name' => 'Horse'],
            ['name' => 'Snake'],
            ['name' => 'Pig'],
            ['name' => 'Goat'],
            ['name' => 'Chicken'],
            ['name' => 'Duck'],
            ['name' => 'Cow'],
            ['name' => 'Spider'],
            ['name' => 'Other'],
        ];

        foreach ($species as $specie) {
            Species::create($specie);
        }
    }
}
