<?php

namespace Database\Factories;

use App\Models\Flight;
use App\Models\Trave;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Trave>
 */
class TraveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'evaluation' => "foglalva",
            'flight_id'=>Flight::all()->random()->id,
            'User_id'=>User::all()->random()->id,
        ];
    }
}
