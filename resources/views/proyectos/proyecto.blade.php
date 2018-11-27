@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyecto: {{ $proyecto -> nombre }}</h2>
  <h3>Titulo: {{ $proyecto -> titulo}}</h3>
  <h3>Responsable: 
  @if(isset($proyecto -> empleado))
  	{{ $proyecto -> empleado -> nombre}}
  @endif
  </h3>
  <h3>Colaboradores:
  @foreach($proyecto -> empleados as $empleado)
  	<br>
  	{{$empleado -> nombre}}
  @endforeach
  </h3>

@endsection
