<?php

namespace Database\Factories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Squad>
 */
class SquadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname'=>$this->faker->name($gender='male'),
            'birthdate'=>$this->faker->date(),
            'number'=>$this->faker->numberBetween(1,20),
            'type'=>$this->faker->randomElement(['Jugador','Comando técnico','Staff']),
            'position_id'=>Position::all()->random()->id
        ];
    }
}
