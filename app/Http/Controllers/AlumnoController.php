<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumno;
use DeepCopy\f001\A;
use Psy\Readline\Hoa\Console;
use App\Http\Requests\StoreAlumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::orderBy('nombre','asc')->paginate(10);

        return view('alumnos.index', compact('alumnos'));
    }

    public function alumnos_cursos(Alumno $alumno){
        return view('alumnos.alumnos_cursos', compact('alumno'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAlumno $request, Alumno $alumno)

    {
        $alumno->update($request->all());
        return redirect()->route('alumnos.index');
    }

    public function delete(Alumno $alumno)
    {
        return view('alumnos.delete', compact('alumno'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado correctamente');
    }
}
