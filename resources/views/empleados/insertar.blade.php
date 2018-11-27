@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

<h2>Insertar Empleado</h2>
<form action="{{route('insertEmp')}}" method="post" onsubmit="alert('Empleado insertado Correctamente')">
	@csrf
	<label>Nombre:</label>
	<input type="text" name="nombre">
	<br>
	<label>Apellido 1:</label>
	<input type="text" name="apellido1">
	<br>
	<label>Apellido 2:</label>
	<input type="text" name="apellido2">
	<br>
	<label>Email:</label>
	<input type="email" name="email">
	<br>
	<label>Telefono:</label>
	<input type="number" name="telefono">
	<br>
	<label>Departamento:</label>
	<select name="departamento">
		@foreach($departamentos as $departamento)
			<option value="{{$departamento -> id}}">{{$departamento -> nombre}}</option>
		@endforeach
	</select>
	<br>
	<input type="submit" name="enviar" value="Enviar">
</form>








@endsection