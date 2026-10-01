<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Project;
use App\Models\ProjectEmployeeDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
        
        //Employee::factory(20)->create();

        //Project::factory(20)->create();

        //ProjectEmployeeDetail::factory(20)->create();
    }
}
