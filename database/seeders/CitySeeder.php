<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            'Dhanmondi' => '1205',
            'Gulshan' => '1212',
            'Banani' => '1213',
            'Uttara' => '1230',
            'Mirpur' => '1216',
            'Mohammadpur' => '1207',
            'Farmgate' => '1215',
            'Motijheel' => '1000',
            'Kawran Bazar' => '1219',
            'New Market' => '1214',
            'Azimpur' => '1208',
            'Lalbagh' => '1209',
            'Kotwali' => '1100',
            'Chawkbazar' => '1211',

        ];

        foreach ($cities as $name => $code) {
            City::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'code' => $code,
                'remarks' => 'N/A'
            ]);
        }
    }
}
