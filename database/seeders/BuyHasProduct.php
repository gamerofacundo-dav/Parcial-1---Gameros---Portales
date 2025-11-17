<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuyHasProduct extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buy_have_products')->insert([
            [
                'compra_fk' => 1,
                'juego_fk' => 1
            ],
            [
                'compra_fk' => 1,
                'juego_fk' => 2
            ],
            [
                'compra_fk' => 2,
                'juego_fk' => 2
            ]
        ]);
    }
}
