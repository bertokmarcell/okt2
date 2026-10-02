<?php

namespace Database\Factories;

use App\Models\Airline;
use App\Models\Flight;
use Carbon\Traits\Timestamp;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

use function Laravel\Prompts\number;

/**
 * @extends Factory<Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'date' => "2020-12-12",
           'airline_id'=> Airline::all()->id,
           'limit' => fake()->numberBetween(0,500)
        ];
    }
}
