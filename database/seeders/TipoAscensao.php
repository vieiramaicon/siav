<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoAscensao extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_ascensoes')->insert(['codigo' => 'asc01', 'nome' => 'Progressão']);

        DB::table('tipos_ascensoes')->insert(['codigo' => 'asc02', 'nome' => 'Promoção']);

        DB::table('tipos_ascensoes')->insert(['codigo' => 'asc03', 'nome' => 'Promoção - Mérito e Titulação']);
    }
}
