<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
            "nota1" => 7,
            "nota2" => 5,
            "nota3" => 8,
            "nota4" => 10,
            "parcial" => 10,
            "promedio" => 9,
        ]);
        DB::table('notas')->insert([
            "nota1" => 7,
            "nota2" => 5,
            "nota3" => 8,
            "nota4" => 10,
            "parcial" => 10,
            "promedio" => 5,
        ]);
        DB::table('notas')->insert([
            "nota1" => 7,
            "nota2" => 5,
            "nota3" => 8,
            "nota4" => 10,
            "parcial" => 10,
            "promedio" => 10,
        ]);
        DB::table('notas')->insert([
            "nota1" => 8,
            "nota2" => 5,
            "nota3" => 2,
            "nota4" => 7,
            "parcial" => 9,
            "promedio" => 8.5,
        ]);
        DB::table('notas')->insert([
            "nota1" => 10,
            "nota2" => 9.5,
            "nota3" => 10,
            "nota4" => 0,
            "parcial" => 0,
            "promedio" => 5.90,
        ]);
    }
}
