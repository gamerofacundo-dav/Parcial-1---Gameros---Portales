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
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.ad',
                'password' => Hash::make('soyadmin'),
                'rol' => 'admin'
            ],
            [
                'id' => 2,
                'name' => 'User',
                'email' => 'user@user.us',
                'password' => Hash::make('soyuser'),
                'rol' => 'user'
            ]
        ]);
    }
}
