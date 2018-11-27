@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

<h2>Proyectos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>DNI</th>
      <th>Nombre</th>
      <th>Apellido</th>
    </tr>
    @foreach($clientes as $cliente)
    	<tr>
    		<td>{{$cliente -> id}}</td>
    		<td>{{$cliente -> dni}}</td>
    		<td>{{$cliente -> nombre}}</td>
          	<td>{{$cliente -> apellido}}</a></td>
    	</tr>
    @endforeach
  </table>

@endsection