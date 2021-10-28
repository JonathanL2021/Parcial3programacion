<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "nombre"=>"Administrador",
            "apellido" => "Rivas",
            "fechaNacimiento" => "2000-12-20",
            "direccion" => "San salvador",
            "dui" => "19239834-2",
            "genero" => "M",
            "telefono" => 7438945,
            "email" => "admin@gmail.com",
            "password" => bcrypt('admin'),
            "role_id" => 1,
        ]);
        DB::table('users')->insert([
            "nombre"=>"Alberto",
            "apellido" => "Gonzalo",
            "fechaNacimiento" => "2000-12-20",
            "direccion" => "San salvador",
            "dui" => "19239834-2",
            "genero" => "M",
            "telefono" => 7438945,
            "email" => "docente1@gmail.com",
            "password" => bcrypt('docente1'),
            "role_id" => 2,
        ]);
        DB::table('users')->insert([
            "nombre"=>"Francisco",
            "apellido" => "Monterroza",
            "fechaNacimiento" => "2000-12-20",
            "direccion" => "San salvador",
            "dui" => "19239834-2",
            "genero" => "M",
            "telefono" => 7438945,
            "email" => "estudiante1@gmail.com",
            "password" => bcrypt('estudiante1'),
            "role_id" => 3,
        ]);
        DB::table('users')->insert([
            "nombre"=>"Javier",
            "apellido" => "Salinas",
            "fechaNacimiento" => "2000-12-20",
            "direccion" => "San salvador",
            "dui" => "19239834-2",
            "genero" => "M",
            "telefono" => 7438945,
            "email" => "estudiante2@gmail.com",
            "password" => bcrypt('estudiante2'),
            "role_id" => 3,
        ]);
        DB::table('users')->insert([
            "nombre"=>"Jorge",
            "apellido" => "Torres",
            "fechaNacimiento" => "1993-12-20",
            "direccion" => "San Vicente",
            "dui" => "19239834-1",
            "genero" => "M",
            "telefono" => 7438945,
            "email" => "docente2@gmail.com",
            "password" => bcrypt('docente2'),
            "role_id" => 2,
        ]);
    }
}
