<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empleadoscontroller;
use App\Http\Controllers\examenjaimecontroller;

// --- Rutas de Empleados (Déjalas igual) ---
Route::get('inicio',[empleadoscontroller::class,'inicio'])->name('inicio');
Route::get('reporteempleados',[empleadoscontroller::class,'reporteempleados'])->name('reporteempleados');
Route::get('altaempleado',[empleadoscontroller::class,'altaempleado'])->name('altaempleado');
Route::post('guardaempleado',[empleadoscontroller::class,'guardaempleado'])->name('guardaempleado');
Route::get('desactivaempleado',[empleadoscontroller::class,'desactivaempleado'])->name('desactivaempleado');
Route::get('activaempleado',[empleadoscontroller::class,'activaempleado'])->name('activaempleado');
Route::get('eliminaempleado',[empleadoscontroller::class,'eliminaempleado'])->name('eliminaempleado');
Route::get('editaempleado',[empleadoscontroller::class,'editaempleado'])->name('editaempleado');
Route::post('actualizaemp',[empleadoscontroller::class,'actualizaemp'])->name('actualizaemp');

// --- Rutas de Examen Jaime (CORREGIDAS) ---

// 1. Ruta para ver el reporte (apunta a 'index')
Route::get('reportejaime', [examenjaimecontroller::class, 'index'])->name('reporte.jaime');

// 2. Ruta para eliminar (apunta a 'destroy')
Route::delete('/animal/{id}', [examenjaimecontroller::class, 'destroy'])->name('animal.destroy');