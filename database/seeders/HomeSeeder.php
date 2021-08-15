<?php

namespace Database\Seeders;
use App\Models\Home;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            "h1" => "Alex Smith",
            "p" => "I'm",
        ]);
    }
}
