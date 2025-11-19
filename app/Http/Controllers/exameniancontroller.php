<?php

namespace App\Http\Controllers;

use App\Models\animales;
use Illuminate\Http\Request;

class exameniancontroller extends Controller
{
    public function index()
    {
        // Traemos todos los animales junto con su especie
        $animales = animales::with('especie')->get();
        
        return view('empleados.reporteian', compact('animales'));
    }

    public function destroy($id)
    {
        // Busca el animal por su 'ida' automáticamente gracias al modelo
        $animal = animales::find($id);
        
        if ($animal) {
            $animal->delete();
            return redirect()->route('reporte.ian')->with('success', 'Animal eliminado correctamente.');
        }

        return redirect()->route('reporte.ian')->with('error', 'No se pudo encontrar el animal.');
    }
}