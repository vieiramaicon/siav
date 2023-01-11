<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusAscensaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_ascensoes')->insert(['codigo' => 'st01', 'nome' => 'Em elaboração']);

        DB::table('status_ascensoes')->insert(['codigo' => 'st02', 'nome' => 'Solicitado']);

        DB::table('status_ascensoes')->insert(['codigo' => 'st03', 'nome' => 'Protocolado']);

        DB::table('status_ascensoes')->insert(['codigo' => 'st04', 'nome' => 'Avaliado']);

        DB::table('status_ascensoes')->insert(['codigo' => 'st05', 'nome' => 'Carregado']);

        DB::table('status_ascensoes')->insert(['codigo' => 'st06', 'nome' => 'Em edição']);
    }
}
