@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleado: {{ $empleado -> nombre }}</h2>
  <h3>Responsable del proyecto: 
  @if(isset($empleado ->proyecto))
  	{{ $empleado -> proyecto -> nombre}}
  @endif
  </h3>
  <h3>Colabora en los siguientes proyectos:
  <table>
    <tr>
      <th>Nombre/Apellido</th>
      <th>Fecha Inicio</th>
      <th>Fecha Fin</th>
    </tr>
  
   @foreach($empleado -> proyectos as $proyecto)
   		<tr>
     		<td>{{$proyecto -> nombre}}</td>
        <td>{{date('d-m-Y',strtotime($proyecto->pivot->fechainicio))}}</td>
        <td>{{date('d-m-Y',strtotime($proyecto->pivot->fechafin))}}</td>
      </tr>
   @endforeach
  </table>
  </h3>

@endsection
