<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Curso;
use Faker\Factory as Faker;

class IkasleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $alumnos = Alumno::all();
        $cursos = Curso::all();

        foreach ($alumnos as $alumno) {
            $selectedCursos = $cursos->random(rand(1, 3))->pluck('id')->toArray();

            foreach ($selectedCursos as $cursoId) {
                $alumno->cursos()->attach($cursoId, [
                    'nota' => $faker->randomElement(['5', '6', '7', '8', '9', '10'])
                ]);
            }
        }
    }
}
