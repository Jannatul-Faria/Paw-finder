<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'name' => 'Support',
                'content' => 'Buddy is a friendly dog looking for a new home.',
                'slug' => 'adopt-buddy',
                'url' => 'http://example.com/adopt/buddy',
                'is_status' => true
            ],
            [
                'name' => 'Terms & Conditions',
                'content' => 'Mittens is a playful kitten who loves to cuddle.',
                'slug' => 'adopt-mittens',
                'url' => 'http://example.com/adopt/mittens',
                'is_status' => true
            ],
            [
                'name' => 'Privacy Policy',
                'content' => 'Charlie is a curious cat who enjoys exploring.',
                'slug' => 'adopt-charlie',
                'url' => 'http://example.com/adopt/charlie',
                'is_status' => true
            ],
            [
                'name' => 'Career',
                'content' => 'Bella is a gentle dog who loves children.',
                'slug' => 'adopt-bella',
                'url' => 'http://example.com/adopt/bella',
                'is_status' => true
            ],
           
        ];

        // Insert the pages into the database
        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}