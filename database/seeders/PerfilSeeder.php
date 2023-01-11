<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfis')->insert(['nome' => 'User', 'cod' => 'pf01']);
        DB::table('perfis')->insert(['nome' => 'Servidor', 'cod' => 'pf02']);
        DB::table('perfis')->insert(['nome' => 'Protocolo', 'cod' => 'pf03']);
        DB::table('perfis')->insert(['nome' => 'Copad', 'cod' => 'pf04']);
        DB::table('perfis')->insert(['nome' => 'Admin', 'cod' => 'pf05']);
    }
}
