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
        Schema::create('projects', function (Blueprint $table) {
            $table->id(); // id_proyecto (PK)
            $table->string('id_project')->unique();
            $table->string('project_name'); // nombre_proyecto
            $table->text('description')->nullable(); // descripcion
            $table->dateTime('start_date'); // fecha_inicio
            $table->dateTime('end_date'); // fecha_fin
            $table->decimal('budget', 15, 2); // presupuesto
            $table->string('status'); // estado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};