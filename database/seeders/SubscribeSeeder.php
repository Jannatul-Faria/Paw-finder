<?php

namespace Database\Seeders;

use App\Models\Subscribe;
use Database\Factories\SubscribeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscribe::factory(50)->create();
    }
}