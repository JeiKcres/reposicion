<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\ProveedoresController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/empleados/todos', [EmpleadosController::class , 'mostrarTodos'])->name('empleados.mostrar');
Route::get('/proveedores/todos', [ProveedoresController::class , 'mostrarTodos'])->name('proveedores.mostrar');
Route::get('/proveedores/insertar', [ProveedoresController::class, 'insertarProveedor'])->name('proveedores.insertar');
Route::post('/proveedores/guardar', [ProveedoresController::class, 'guardarproveedor'])->name('proveedor.guardar');
//Route::get('/directorio/crear', [EmpleadoController::class , 'crearEmpleado'])->name('directorio.crear');
