<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleado1;
class EmpleadosController extends Controller
{
    public function mostrarTodos(){
        $empleados = empleado1::all();
        return view('mostrarEmpleados', compact('empleados'));

    }

    public function crearEntrada(){
        return view('crearEntrada');
    }
}
