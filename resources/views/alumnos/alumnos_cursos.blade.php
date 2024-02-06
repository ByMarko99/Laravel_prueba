@extends('partials.plantilla')


@section('title', 'IKASLEEN CURSOS')

@section('content')

    <table>

        <tr>

            <th>Cursos</th>
            <th>Horas Academicas</th>
            <th>&nbsp;</th>


        </tr>
        @foreach ($alumno->cursos as $curso)

        <tr>
            <td>{{ $curso->nombre }}</td>
            <td>{{ $curso->horasAcademicas }}</td>

        </tr>
    @endforeach

    </table>



@endsection
