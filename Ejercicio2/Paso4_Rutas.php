4: Definir las rutas
<?php

use App\Http\Controllers\TareaController;


Route::prefix('tareas')->name('tareas.')->controller(TareaController::class)->group(function () {
    Route::post('/save/{id?}', 'store')->name('save'); 
    Route::delete('/delete/{id}', 'destroy')->name('delete'); 
    Route::resource('/', TareaController::class)->except(['store', 'update'])->parameters(['' => 'tarea']);
});
?>