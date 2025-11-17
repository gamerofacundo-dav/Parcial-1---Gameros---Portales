<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bg_classes')->insert([
            [
                'clase_id' => 1,
                'juego_fk' => 1,
                'nombre' => "Elf",
                'portada' => 'elf.webp',
                'descripcion' => '
Con cuerpos etéreos y una larga esperanza de vida, los elfos se sienten en armonía con el poder de la naturaleza, prosperando tanto en la luz como en la oscuridad.'
            ],
            [
                'clase_id' => 2,
                'juego_fk' => 2,
                'nombre' => "Tiefling",
                'portada' => 'tiefling.webp',
                'descripcion' => 'Descendientes de los demonios de los Nueve Infiernos, los tieflings se enfrentan a una constante sospecha en Faerûn. Por suerte, sus habilidades arcanas los convierten en supervivientes natos.'
            ],
            [
                'clase_id' => 3,
                'juego_fk' => 1,
                'nombre' => "Drow",
                'portada' => 'drow.webp',
                'descripcion' => 'Expulsados ​​a la Infraoscuridad, la mayoría de los drow han adoptado un pragmatismo despiadado. Mientras que los que juraron lealtad a Lolth se deleitan con los malvados preceptos de la diosa, los Seldarine rechazan su intento de derrocar al líder del panteón élfico.'
            ],
            [
                'clase_id' => 4,
                'juego_fk' => 2,
                'nombre' => "Human",
                'portada' => 'human.webp',
                'descripcion' => '
Los humanos, el rostro más común en Faerûn, son conocidos por su tenacidad, creatividad e inagotable capacidad de crecimiento.'
            ],
            [
                'clase_id' => 5,
                'juego_fk' => 2,
                'nombre' => "Githyanki",
                'portada' => 'githyanki.webp',
                'descripcion' => '
Con una crueldad nacida de la esclavitud de los azotamentes, los githyanki cabalgan el Mar Astral sobre dragones rojos, empleando sus espadas de plata y su poder psiónico contra cualquier rastro de la amenaza illithid.'
            ],
            [
                'clase_id' => 6,
                'juego_fk' => 1,
                'nombre' => "Dwarf",
                'portada' => 'dwarf.webp',
                'descripcion' => '
Tan resistentes e inquebrantables como sus hogares de piedra, los enanos son algunos de los mejores guerreros, mineros y herreros de Faerûn.'
            ],
            [
                'clase_id' => 7,
                'juego_fk' => null,
                'nombre' => "Half-Elf",
                'portada' => 'half-elf.webp',
                'descripcion' => 'Curious, ambitious, and versatile, half-elves are welcome everywhere, but struggle without a community to call their own.'
            ],
            [
                'clase_id' => 8,
                'juego_fk' => null,
                'nombre' => "Halfling",
                'portada' => 'halfling.webp',
                'descripcion' => '
Pequeños pero capaces, los medianos prefieren las comodidades del hogar y la chimenea, pero su suerte y destreza naturales los convierten en excelentes aventureros.'
            ],
            [
                'clase_id' => 9,
                'juego_fk' => null,
                'nombre' => "Gnome",
                'portada' => 'gnome.webp',
                'descripcion' => '
Small, clever, and energetic, gnomes use their long lives to explore Faerûns brightest corners and darkest depths.'
            ],
            [
                'clase_id' => 10,
                'juego_fk' => null,
                'nombre' => "Half-Orc",
                'portada' => 'half-orc.webp',
                'descripcion' => 'Criaturas de intensas emociones, los medio orcos son más propensos a actuar que a contemplar; ya sea que la rabia que consume sus cuerpos los impulse a luchar, o que el amor que llena sus corazones los inspire a realizar actos de increíble bondad.'
            ],
            [
                'clase_id' => 11,
                'juego_fk' => null,
                'nombre' => "Dragonborn",
                'portada' => 'dragonborn.webp',
                'descripcion' => 'Una raza orgullosa que valora el clan y las habilidades por encima de todo. Antaño esclavizados por dragones, se esfuerzan por ser autosuficientes, sin querer depender de nadie, ni siquiera de los dioses.'
            ],
        ]);
    }
}
