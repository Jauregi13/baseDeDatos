@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Titulo</th>
      <th>Responsable</th>
    </tr>
    @foreach($proyectos as $proyecto)
    	<tr>
    		<td>{{$proyecto -> id}}</td>
    		<td><a href="{{route('proyecto',$proyecto -> id)}}">{{$proyecto -> nombre}}</a></td>
    		<td><a href="{{route('proyecto',$proyecto -> id)}}">{{$proyecto -> titulo}}</a></td>
        @if($proyecto -> empleado != null)
          <td><a href="{{route('empleado',$proyecto -> empleado -> id)}}">{{$proyecto -> empleado -> nombre}}</a></td>
        @endif
    	</tr>
    @endforeach
  </table>

@endsection
