<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proveedore;

class ProveedoresController extends Controller
{
    public function mostrarTodos(){
        $proveedores = proveedore::all();
        return view('mostrarProveedores', compact('proveedores'));

    }
    public function insertarProveedor(){
        return view('crearProveedor');
    }
    
    public function guardarProveedor(Request $request){
        $nvoProveedores = new Proveedore();
        $nvoProveedores->nombre = $request->nombre;
        $nvoProveedores->apellido = $request->apellido;
        $nvoProveedores->fechaRegistro = $request->fechaRegistro;
        $nvoProveedores->correo = $request->correo;
        $nvoProveedores->save();

        return redirect('proveedores.mostrar');
        
    }
}
