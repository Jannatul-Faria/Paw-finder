<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'role_id' => 1,
                'name' => 'Super Admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('password'),
                'phone' => '01835061968',
                'address' => 'Dhaka, Bangladesh',
                'remember_token' => Str::random(10),
                'email_verified_at' => now(),
            ],
            [
                'role_id' => 2,
                'name' => 'User',
                'email' => 'user@mail.com',
                'password' => Hash::make('password'),
                'phone' => '01303132067',
                'address' => 'Dhaka, Bangladesh',
                'email_verified_at' => now(),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}