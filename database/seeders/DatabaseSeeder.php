<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PageSeeder::class,
            HomeSeeder::class,
            AboutSeeder::class,
            ServicesSeeder::class,
            PricingSeeder::class,
            ProcessSeeder::class,
            ContactSeeder::class,
            PortfolioSeeder::class,
            BlogSeeder::class,
        ]);
    }
}
