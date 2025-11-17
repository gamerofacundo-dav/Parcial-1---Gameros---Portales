<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameHasPlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games_have_platforms')->insert([
            [
                'juego_fk' => 1,
                'plataforma_fk' => 4
            ],
            [
                'juego_fk' => 1,
                'plataforma_fk' => 5
            ],
            [
                'juego_fk' => 1,
                'plataforma_fk' => 2
            ],
            [
                'juego_fk' => 1,
                'plataforma_fk' => 3
            ],
            [
                'juego_fk' => 2,
                'plataforma_fk' => 1
            ],
            [
                'juego_fk' => 2,
                'plataforma_fk' => 2
            ],
            [
                'juego_fk' => 2,
                'plataforma_fk' => 3
            ],
        ]);
    }
}
