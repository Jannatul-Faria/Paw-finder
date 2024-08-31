<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    protected $model = Pet::class;
    public function definition()
    {
        $userId = User::all()->random()->id;

        return [
            'user_id' => $userId,
            'name' => $this->faker->name,
            'breed' => $this->faker->realText(10),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'age' => $this->faker->numberBetween(1, 15),
            'details' => $this->faker->paragraph(20),
            'thumbnail' => $this->faker->imageUrl(200, 200),
            'images' => null,
            'health_status' => $this->faker->randomElement(['healthy', 'sick', 'injured', 'pregnant']),
            'special_needs' => $this->faker->randomElement(['yes', 'no']),
            'fee' => $this->faker->randomFloat(2, 0, 500),
            'availability' => $this->faker->randomElement(['available', 'unavailable']),
            'status' => 1,
        ];
    }
}
