<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{
        $this->call([
            GameSeeder::class,
            BlogSeeder::class,
            UserSeeder::class,
            PlatformsSeeder::class,
            GameHasPlatformSeeder::class,
            ClassSeeder::class,
            BuysSeeder::class,
            BuyHasProduct::class,
            ProfileSeeder::class
        ]);
    }
}
