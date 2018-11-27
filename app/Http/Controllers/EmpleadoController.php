<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empleado;

class EmpleadoController extends Controller
{
  public function index ()
  {
  	$empleados = Empleado::all();
    return view ('empleados.index', ['empleados' => $empleados]);
  }

  public function get ($id)
  {
  	$empleado = Empleado::find($id);
    return view ('empleados.empleado', ['empleado' => $empleado]);
  }

  public function insert(Request $request)
  {
    $empleado = new Empleado;

    $empleado->nombre = $request->nombre;
    $empleado->apellido1= $request->apellido1;
    $empleado->apellido2 = $request->apellido2;
    $empleado->email = $request->email;
    $empleado->telefono = $request->telefono;
    $empleado->departamento_id = $request->departamento;

    $empleado->save();

    return view('empleados.index');
  }
}
