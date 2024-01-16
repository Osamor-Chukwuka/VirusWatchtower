<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VirusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'type'=> $this->faker->bloodType,
            'danger_level'=> $this->faker->numberBetween(1, 10),
            'affected_platform'=> $this->faker->company,
            'symptoms'=> $this->faker->sentence,
            'distribution_method'=> $this->faker->sentence,
            'prevention'=> $this->faker->sentence,
            'removal'=> $this->faker->sentence,
        ];
    }
}
