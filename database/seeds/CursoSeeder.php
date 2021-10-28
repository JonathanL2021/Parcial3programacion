<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            "nombreCurso" => "Redes 1",
            "year" => 2021,
            "ciclo" => 1,
            "user_id" => 2
        ]);
        DB::table('cursos')->insert([
            "nombreCurso" => "Hacking etico",
            "year" => 2021,
            "ciclo" => 1,
            "user_id" => 2
        ]);
        DB::table('cursos')->insert([
            "nombreCurso" => "Base de datos 2",
            "year" => 2021,
            "ciclo" => 1,
            "user_id" => 2
        ]);
        DB::table('cursos')->insert([
            "nombreCurso" => "Programacion III",
            "year" => 2021,
            "ciclo" => 2,
            "user_id" => 5
        ]);
    }
}
