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
            $table->id(); // id_asignacion (PK)
            
            // Relaciones (Foreign Keys) hacia employees y projects
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade'); // id_empleado
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade'); // id_proyecto
            
            // Atributos específicos del diagrama de detalle
            $table->string('project_role'); // rol_en_proyecto
            $table->integer('assigned_hours'); // horas_asignadas
            $table->dateTime('assignment_date'); // fecha_asignacion
            
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