@extends('partials.plantilla')


@section('title', 'IKASLEEN CURSOS')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>direccion</th>
            <th>Telefono</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alumnos as $alumno)
        <tr>

                <td>  <a href="{{route('alumnos.alumnos_cursos', $alumno)}}">{{$alumno->nombre}} </a></td>

            <td>{{$alumno->edad}}</td>
            <td>{{$alumno->direccion}}</td>
            <td>{{$alumno->telefono}}</td>
            <td> <a href="{{route('alumnos.edit', $alumno)}}">editar </a></td>
            <td> <a href="{{route('alumnos.delete', $alumno)}}">borrar </a></td>

        </tr>
        @endforeach
    </tbody>
</table>
{{$alumnos->links()}}


@endsection
