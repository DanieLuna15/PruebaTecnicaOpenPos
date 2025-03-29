<!-- Ejercicio 2 - Laravel (CRUD Básico con Eloquent)
Problema: Crea un CRUD en Laravel para la entidad Tareas. Los campos deben ser id, titulo, descripcion y estado (pendiente/completado). Implementa las siguientes rutas:
● POST /tareas → Crea una nueva tarea.
● GET /tareas → Lista todas las tareas.
● PUT /tareas/{id} → Actualiza una tarea.
● DELETE /tareas/{id} → Elimina una tarea.
 -->
<!-- 
1: Crear la Migración ejecutando
php artisan make:migration create_tareas_table -->

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->enum('estado', ['pendiente', 'completado'])->default('pendiente');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tareas');
    }
}
