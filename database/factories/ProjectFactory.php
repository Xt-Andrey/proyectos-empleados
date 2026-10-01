<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_project' => $this->faker->unique()->bothify('PROJ-###'),
            'project_name' => $this->faker->catchPhrase(),
            'description' => $this->faker->paragraph(),
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTimeBetween('+1 months', '+1 year'),
            'budget' => $this->faker->randomFloat(2, 1000, 500000),
            'status' => $this->faker->boolean(),
            'registered_by' => 1,
        ];
    }
}