<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('platforms')->insert([
            [
                'plataforma_id' => 1,
                'nombre' => 'LarianStudios',
                'imagen' => 'plataforma-larian.webp',
            ],
            [
                'plataforma_id' => 2,
                'nombre' => 'PS5',
                'imagen' => 'plataforma-ps5.webp',
            ],
            [
                'plataforma_id' => 3,
                'nombre' => 'Xbox',
                'imagen' => 'plataforma-xbox.webp',
            ],
            [
                'plataforma_id' => 4,
                'nombre' => 'Steam',
                'imagen' => 'plataforma-xbox.webp',
            ],
            [
                'plataforma_id' => 5,
                'nombre' => 'GOG.com',
                'imagen' => 'plataforma-gog.webp',
            ],
        ]);
    }
}
