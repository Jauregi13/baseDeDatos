@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre/Apellido</th>
      <th>Departamento</th>
      <th>Responsable del proyecto</th>
    </tr>
    @foreach($empleados as $empleado)
    	<tr>
    		<td>{{ $empleado -> id}} </td>
    		<td><a href="{{route('empleado',$empleado -> id)}}">{{ $empleado -> nombre}}</a></td>
        @if(isset($empleado -> departamento))
         <td><a href="{{route('departamento',$empleado -> departamento -> id)}}">{{$empleado -> departamento -> nombre}}</a></td>

        @else
          <td></td>
        @endif
          
        @if($empleado -> proyecto != null)
          <td><a href="{{route('proyecto',$empleado -> proyecto -> id)}}">{{ $empleado -> proyecto -> nombre}}</a></td>
        @endif
    	</tr>
    @endforeach
  </table>

@endsection
