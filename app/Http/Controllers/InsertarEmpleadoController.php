<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Departamento;

class InsertarEmpleadoController extends Controller
{
    public function listarDepart()
    {
    	$departamentos = Departamento::all();

    	return view('empleados.insertar', ['departamentos' => $departamentos]);
    }

    public function insertarEmpleado(Request $request)
    {
    	
    }
}
