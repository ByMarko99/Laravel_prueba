<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/', [AlumnoController::class, 'index']) -> name('alumnos.index');

Route::get('/alumno/{alumno}', [AlumnoController::class, 'alumnos_cursos']) -> name('alumnos.alumnos_cursos');

Route::get('alumnos/edit/{alumno}', [AlumnoController::class, 'edit']) -> name('alumnos.edit');
Route::put('alumnos/update/{alumno}', [AlumnoController::class, 'update']) -> name('alumnos.update');
Route::delete('alumnos/{alumno}', [AlumnoController::class, 'destroy']) -> name('alumnos.destroy');
Route::get('alumnos/delete/{alumno}', [AlumnoController::class, 'delete']) -> name('alumnos.delete');
