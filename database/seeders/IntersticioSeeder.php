<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class IntersticioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        Carbon::class;
        // 1.º de julho a 30 de junho
        DB::table('intersticios')->insert([
            'ano' => 2023, 
            'intersticio_inicio' => Carbon::createFromDate(2022, 6, 1), //date('d-m-Y', strtotime('01-06-2022')), 
            'intersticio_fim' => Carbon::createFromDate(2023, 7, 30), //'30-07-2023', 
            'periodo_inicio' => Carbon::createFromDate(2023, 1, 1), //'01-01-2023', 
            'periodo_fim' => Carbon::createFromDate(2023, 8, 31), //'31-08-2023'
        ]);
    }
}
