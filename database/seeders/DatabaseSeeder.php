<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            HomeSeeder::class,
            AboutSeeder::class,
            ContactSeeder::class,
            ServicesSeeder::class,
            ServicesDynamicSeeder::class,
            PortfolioSeeder::class,
            PortfolioDynamicSeeder::class,
            SkillsSeeder::class,
            SkillsDynamicSeeder::class,
            FactsSeeder::class,
            HeaderSeeder::class
        ]);
    }
}
