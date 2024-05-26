<?php

namespace Database\Factories;

use App\Models\Season;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manager>
 */
class ManagerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname'=>$this->faker->name(),
            'position'=>$this->faker->randomElement(['PRESIDENTE','SECRETARIO','TESORERO','VOCAL']),
            'dni'=>$this->faker->numerify('########'),
            'birthdate'=>$this->faker->date(),
            'email'=>$this->faker->email(),
            'cellphone'=>$this->faker->phoneNumber(),
            'season_id'=>Season::all()->random()->id
        ];
    }
}
