<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(['name' => 'User', 'email' => 'user@gmail.com', 'password' => Hash::make('123456')]);
        User::factory()->create(['name' => 'Servidor', 'email' => 'servidor@gmail.com', 'password' => Hash::make('123456')]);
        User::factory()->create(['name' => 'Protocolo', 'email' => 'protocolo@gmail.com', 'password' => Hash::make('123456')]);   
        User::factory()->create(['name' => 'Copad', 'email' => 'copad@gmail.com', 'password' => Hash::make('123456')]);
        User::factory()->create(['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('123456')]);   
        User::factory()->create(['name' => 'Servidor - Protocolo', 'email' => 'servidor_protocolo@gmail.com', 'password' => Hash::make('123456')]);   
        User::factory()->create(['name' => 'Servidor - Copad', 'email' => 'servidor_copad@gmail.com', 'password' => Hash::make('123456')]);   
        User::factory()->create(['name' => 'Servidor - Admin', 'email' => 'servidor_admin@gmail.com', 'password' => Hash::make('123456')]); 
    }
}
