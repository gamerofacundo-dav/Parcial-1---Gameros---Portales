<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buys')->insert([
            [
                'compra_id' => 1,
                'usuario_fk' => 1,
                'estado' => 'Pendiente'
            ],
            [
                'compra_id' => 2,
                'usuario_fk' => 2,
                'estado' => 'Pendiente'
            ],
        ]);
    }
}
