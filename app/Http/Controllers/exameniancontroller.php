<?php

namespace App\Http\Controllers;

use App\Models\animales;
use Illuminate\Http\Request;

class exameniancontroller extends Controller
{
    public function index()
    {
        // 1. Obtenemos los animales con su especie
        $animales = animales::with('especie')->get();
        
        // 2. Retornamos la vista renombrada a 'reporteian'
        return view('empleados.reporteian', compact('animales'));
    }

    public function destroy($id)
    {
        $animal = animales::find($id);
        
        if ($animal) {
            $animal->delete();
            // Redirigimos a la ruta renombrada 'reporte.ian'
            return redirect()->route('reporte.ian')->with('success', 'Animal eliminado correctamente.');
        }

        return redirect()->route('reporte.ian')->with('error', 'No se pudo encontrar el animal.');
    }
}