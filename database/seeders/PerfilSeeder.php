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
        DB::table('perfis')->insert(['nome' => 'user', 'cod' => 'pf01']);
        DB::table('perfis')->insert(['nome' => 'servidor', 'cod' => 'pf02']);
        DB::table('perfis')->insert(['nome' => 'protocolo', 'cod' => 'pf03']);
        DB::table('perfis')->insert(['nome' => 'copad', 'cod' => 'pf04']);
        DB::table('perfis')->insert(['nome' => 'admin', 'cod' => 'pf05']);
    }
}
