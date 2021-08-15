<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            "titreServices" => "Services",
            "p" => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
            ea. Quia fugiat sit in iste officiis commodi quidem hic quas."
        ]);
    }
}