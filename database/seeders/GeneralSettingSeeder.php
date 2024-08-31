<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GeneralSetting::create([
            'site_title' => 'Paw Finder',
            'site_email' => 'pawfinder@gmail.com',
            'site_phone' => '+88018546521',
            'site_fax' => '465219802',
            'site_url' => 'https://pawfinders.com/how-to/',
            'site_author' => 'Admin',
            'site_address' => 'Navana Sylviyana 59, 2 Park Rd, Dhaka 1212',
            'site_footer' => '2024 PawFinder All Rights Reserved',
            'site_description' => 'PawFinder All Rights Reserved',
            'facebook_url'=> 'https://www.facebook.com/',
            'linkedin_url'=> 'https://www.linkdin.com/',
            'twitter_url'=>'https://www.twitter.com/',
            'instagram_url'=>'https://www.instagram.com/',
            'adoption_form_url'=>'https://adoption.com/how-to/',
        ]);
    }
}