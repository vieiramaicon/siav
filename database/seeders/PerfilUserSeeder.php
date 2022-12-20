<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfil_user')->insert(['user_id' => 1, 'perfil_id' => 1]);

        DB::table('perfil_user')->insert(['user_id' => 2, 'perfil_id' => 2]);

        DB::table('perfil_user')->insert(['user_id' => 3, 'perfil_id' => 3]);
        
        DB::table('perfil_user')->insert(['user_id' => 4, 'perfil_id' => 4]);

        DB::table('perfil_user')->insert(['user_id' => 5, 'perfil_id' => 5]);
        

        DB::table('perfil_user')->insert(['user_id' => 6, 'perfil_id' => 2]);
        DB::table('perfil_user')->insert(['user_id' => 6, 'perfil_id' => 3]);

        DB::table('perfil_user')->insert(['user_id' => 7, 'perfil_id' => 2]);
        DB::table('perfil_user')->insert(['user_id' => 7, 'perfil_id' => 4]);

        DB::table('perfil_user')->insert(['user_id' => 8, 'perfil_id' => 2]);
        DB::table('perfil_user')->insert(['user_id' => 8, 'perfil_id' => 5]);
    }
}
