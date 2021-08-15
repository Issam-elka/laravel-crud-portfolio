<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            'img' => "profile-img.jpg",
            "h1" => "Alex Smith",
            "icon1" => "bx bxm-twitter",
            "icon2" => "bx bxm-facebook",
            "icon3" => "bx bxm-instagram",
            "icon4" => "bx bxm-skype",
            "icon5" => "bx bxm-linkedin",
            "nav1" => "Home",
            "nav2" => "About",
            "nav3" => "Portfolio",
            "nav4" => "Services",
            "nav5" => "Contact",
            "btn_icon" => "icofont-navigation-menu"
        ]);
    }
}
