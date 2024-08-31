<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $tags = [
                ['name' => 'Adoption', 'slug' => 'adoption', 'order_by' => 1, 'is_status' => true],
                ['name' => 'Fostering', 'slug' => 'fostering', 'order_by' => 2, 'is_status' => true],
                ['name' => 'Lost & Found', 'slug' => 'lost-and-found', 'order_by' => 3, 'is_status' => true],
                ['name' => 'Emergency', 'slug' => 'emergency', 'order_by' => 4, 'is_status' => true],
                ['name' => 'Volunteering', 'slug' => 'volunteering', 'order_by' => 5, 'is_status' => true],
            ];
    
            // Insert the pages into the database
        foreach ($tags as $tag) {
            Tag::create($tag);
        }
        }
    }
}
