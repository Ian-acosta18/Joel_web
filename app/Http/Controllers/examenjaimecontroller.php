<?php

namespace App\Http\Controllers;

use App\Models\animales;
use Illuminate\Http\Request;

class examenjaimecontroller extends Controller
{
    public function index()
    {
        // 1. Obtenemos los animales con su especie
        $animales = animales::with('especie')->get();
        
        // 2. SOLUCIÓN DEL ERROR:
        // Agregamos 'empleados.' antes del nombre para entrar a esa carpeta.
        // Laravel buscará en: resources/views/empleados/reportejaime.blade.php
        return view('empleados.reportejaime', compact('animales'));
    }

    public function destroy($id)
    {
        // Buscamos el animal por su ID (ida) y lo eliminamos
        $animal = animales::find($id);
        
        if ($animal) {
            $animal->delete();
            return redirect()->route('reporte.jaime')->with('success', 'Animal eliminado correctamente.');
        }

        return redirect()->route('reporte.jaime')->with('error', 'No se pudo encontrar el animal.');
    }
}