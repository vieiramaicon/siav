<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_cursos')->insert(['codigo' => 'st01', 'nome' => 'Cadastrado']);

        DB::table('status_cursos')->insert(['codigo' => 'st02', 'nome' => 'Carregado']);

        DB::table('status_cursos')->insert(['codigo' => 'st03', 'nome' => 'Migrado']);
    }
}
