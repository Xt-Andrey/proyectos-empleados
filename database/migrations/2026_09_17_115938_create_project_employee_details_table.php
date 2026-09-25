<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project_employee_details', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('employee_id')->constrained('employees');
            $table->foreignId('project_id')->constrained('projects');
            
            $table->string('project_role');
            $table->integer('assigned_hours');
            $table->dateTime('assignment_date');
            $table->foreignId('registered_by');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_employee_details');
    }
};