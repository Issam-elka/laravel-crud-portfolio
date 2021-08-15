<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            "titreFacts" => "Facts",
            "p1" => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",

            "icon1" => "icofont-simple-smile",
            "span" => "232",
            "p2" => "Happy Clients",
            "strong1" => "consequuntur quae",
            
            "icon2" => "icofont-document-folder",
            "span2" => "521",
            "p3" => "Projects",
            "strong2" => "adipisci atque cum quia aut",

            "icon3" => "icofont-live-support",
            "span3" => "1,463",
            "p4" => "Hours of Support",
            "strong3" => "aut commodi quaerat",

            "icon4" => "icofont-users-alt-5",
            "span4" => "15",
            "p5" => "Hard Workers",
            "strong4" => "rerum asperiores dolor",

        ]);
    }
}
