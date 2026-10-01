<?php

namespace Database\Factories;

use App\Models\ProjectEmployeeDetail;
use App\Models\Project;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ProjectEmployeeDetail>
 */
class ProjectEmployeeDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => Employee::inRandomOrder()->first()?->id,
            'project_id' => Project::inRandomOrder()->first()?->id,
            'project_role' => $this->faker->jobTitle(),
            'assigned_hours' => $this->faker->numberBetween(10, 40),
            'assignment_date' => $this->faker->dateTime(),
            'registered_by' => 1,
        ];  
    }
}