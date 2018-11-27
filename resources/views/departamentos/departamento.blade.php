@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamento: {{ $departamento -> nombre}}</h2>
  <h3>Codigo: {{ $departamento -> codigo}}</h3>
  <h3>Empleados: 
  @foreach($departamento -> empleados as $empleados)
  	<br>
  	{{ $empleados -> nombre}}
  @endforeach
  </h3>

@endsection
