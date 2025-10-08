<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            [
                "titulo" => 'Edicíon Deluxe Digital',
                "descripcion" => 'Para quienes buscan sacarle más partido a Baldurs Gate 3, la Edición Digital Deluxe incluye contenido cosmético, como una skin de dado personalizada para presumir con tus amigos, además de prácticos objetos como la Máscara del Cambiaformas de Divinity: Original Sin 2.
                la mágica música de la banda sonora original de Borislav Slavov para Baldurs Gate 3 o incluso coge un bolígrafo y juega a D&D como uno de nuestros personajes de Origin con las prácticas hojas de personaje prediseñadas e imprimibles. Hay mucho que descubrir, dentro y fuera del juego.',
                "fecha_lanzamiento" => '2023-08-03',
                "portada" => 'Deluxe-min.webp',
                "precio" => 72520.00,
            ],
            [
                "titulo" => 'Edición Deluxe Física',
                "descripcion" => 'El multipremiado RPG Baldurs Gate 3 llega al plano mortal. Llena tu repisa de emociones mientras llenas tu corazón de aventuras.
                Elige entre 12 clases y 11 razas del Manual del Jugador de D&D y crea tu propia identidad, o juega como un héroe de Origen con un trasfondo personalizado. O lidia con tu corrupción interior como el Instinto Oscuro, un héroe de Origen totalmente personalizable con sus propias mecánicas e historia únicas. Seas quien seas, ábrete camino a la aventura, saquea, lucha y enamora a través de los Reinos Olvidados y más allá. Reúne a tu grupo. Vive la aventura online con un grupo de hasta cuatro personas.',
                "fecha_lanzamiento" => '2024-03-25',
                "portada" => 'Physical-min.webp',
                "precio" => 390000.00,
            ]
        ]);
    }
}