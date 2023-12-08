<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $teams = Team::all();
        return [
            "first_name"=> $this->faker->firstName,
            "last_name"=> $this->faker->lastName,
            "email"=> $this->faker->safeEmail,
            "rank"=> $this->faker->numberBetween(1,100),
            "team_id" => $teams->Str::random(),
        ];
    }
}
