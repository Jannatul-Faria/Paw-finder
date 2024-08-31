<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                "name" => "Petfinder",
                "slug" => "petfinder",
                "url" => "https://www.petfinder.com",
                "image" => "https://www.petfinder.com/images/logo.png",
                "remark" => "One of the largest online pet adoption websites.",
                "order_by" => 1,
                "is_feature" => true,
                "is_status" => true
            ],
            [
                "name" => "Adopt a Pet",
                "slug" => "adopt-a-pet",
                "url" => "https://www.adoptapet.com",
                "image" => "https://www.adoptapet.com/images/logo.png",
                "remark" => "Provides a simple, reliable way to find a pet.",
                "order_by" => 2,
                "is_feature" => true,
                "is_status" => false
            ],
            [
                "name" => "ASPCA Adoption",
                "slug" => "aspca-adoption",
                "url" => "https://www.aspca.org/adopt-pet",
                "image" => "https://www.aspca.org/sites/default/files/aspca-logo.png",
                "remark" => "Prominent animal welfare organization with nationwide reach.",
                "order_by" => 3,
                "is_feature" => true,
                "is_status" => false
            ],
            [
                "name" => "Best Friends Animal Society",
                "slug" => "best-friends-animal-society",
                "url" => "https://bestfriends.org/adopt",
                "image" => "https://bestfriends.org/sites/default/files/bfas-logo.png",
                "remark" => "Dedicated to saving them all through partnerships and direct rescue efforts.",
                "order_by" => 4,
                "is_feature" => true,
                "is_status" => true
            ]
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
