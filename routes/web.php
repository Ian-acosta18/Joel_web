<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empleadoscontroller;
// CAMBIO IMPORTANTE: Ahora usamos el controlador de Ian
use App\Http\Controllers\exameniancontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- Rutas de Empleados (Se quedan igual) ---
Route::get('inicio',[empleadoscontroller::class,'inicio'])->name('inicio');
Route::get('reporteempleados',[empleadoscontroller::class,'reporteempleados'])->name('reporteempleados');
Route::get('altaempleado',[empleadoscontroller::class,'altaempleado'])->name('altaempleado');
Route::post('guardaempleado',[empleadoscontroller::class,'guardaempleado'])->name('guardaempleado');
Route::get('desactivaempleado',[empleadoscontroller::class,'desactivaempleado'])->name('desactivaempleado');
Route::get('activaempleado',[empleadoscontroller::class,'activaempleado'])->name('activaempleado');
Route::get('eliminaempleado',[empleadoscontroller::class,'eliminaempleado'])->name('eliminaempleado');
Route::get('editaempleado',[empleadoscontroller::class,'editaempleado'])->name('editaempleado');
Route::post('actualizaemp',[empleadoscontroller::class,'actualizaemp'])->name('actualizaemp');


// --- Rutas de Examen Ian (ACTUALIZADAS) ---

// 1. Ruta para ver el reporte
// He cambiado 'reportejaime' por 'reporteian' y el controlador a exameniancontroller
Route::get('reporteian', [exameniancontroller::class, 'index'])->name('reporte.ian');

// 2. Ruta para eliminar
// He actualizado el controlador a exameniancontroller
Route::delete('/animal/{id}', [exameniancontroller::class, 'destroy'])->name('animal.destroy');


// OPCIONAL: Si quieres que esta sea la página principal al abrir la web
Route::get('/', [exameniancontroller::class, 'index'])->name('home.examen');