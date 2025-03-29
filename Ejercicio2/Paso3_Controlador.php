3: Configurar el controlador
php artisan make:controller TareaController --resource

<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    // lista de tareas
    public function index()
    {
        $tareas = Tarea::all();
        return view('tareas.index', compact('tareas'));
    }

    // mostrar el formulario para crear una tarea
    public function create()
    {
        $tarea = new Tarea();
        $pageTitle = 'Nueva Tarea';
        return view('tareas.form', compact('tarea', 'pageTitle'));
    }

    // mostrar el formulario para editar una tarea
    public function edit($id)
    {
        $tarea = Tarea::findOrFail($id);
        $pageTitle = 'Editar Tarea: ' . $tarea->titulo;
        return view('tareas.form', compact('tarea', 'pageTitle'));
    }

    // funcion para crear o modificar datos de una tarea
    public function store(Request $request, $id = null)
    {
        $request->validate([
            'titulo' => ['required', 'string', 'max:255', Rule::unique('tareas')->ignore($id)],
            'descripcion' => 'required|string',
            'estado'      => 'required|in:pendiente,completado'
        ]);

        try {
            $tarea = $id ? Tarea::findOrFail($id) : new Tarea();
            $tarea->fill($request->all())->save();

            return redirect()->route('tareas.index')->with(
                'success',
                $id ? 'Tarea actualizada correctamente' : 'Tarea creada correctamente'
            );
        } catch (\Exception $e) {
            return redirect()->route('tareas.index')->with('error', 'Hubo un error en la operación.');
        }
    }

    // funcion para eliminar una tarea
    public function destroy($id)
    {
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();

        return redirect()->route('tareas.index')->with('success', 'Tarea eliminada correctamente');
    }
}
