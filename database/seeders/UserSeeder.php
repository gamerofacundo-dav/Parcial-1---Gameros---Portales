<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'nosotros@test.dv',
            // Hash nos ofrece metodos para manejar hashes. 
            // Internamente utiliza bcrypt(), que es la misma función que utiliza 
            // la función de PHP password_hash()
            // Estas tres alternativas son equivalentes. Podemos usar bcrypt(), possword_hash() o Hash::make().
            // Como estmaos usando laravel, y vamos a usar su clase de autenticación, para asegurar una buena
            // COmpatibilidad a futuro, deberíamos usar siempre esta clase. 
            'passowrd' => Hash::make('passtest')
        ]);
    }
}
