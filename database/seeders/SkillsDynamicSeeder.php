<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsDynamicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills_dynamics')->insert([
            [   
            "span" => "HTML",
            "i" => "100%",
            "aria" => "100"
            ],
            [   
            "span" => "CSS",
            "i" => "90%",
            "aria" => "90"
            ],
            [   
            "span" => "JavaScript",
            "i" => "75%",
            "aria" => "75"
            ],
            [   
            "span" => "PHP",
            "i" => "80%",
            "aria" => "80"
            ],
            [   
            "span" => "WordPress/CMS",
            "i" => "90%",
            "aria" => "90"
            ],
            [   
            "span" => "Photoshop",
            "i" => "55%",
            "aria" => "55"
            ],
            
        ]); 
    }
}
