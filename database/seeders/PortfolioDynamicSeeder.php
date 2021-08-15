<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioDynamicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_dynamics')->insert([
            
            [
                "img_portfolio" => "portfolio-1.jpg",
                "icon1" => "bx bx-plus",
                "icon2" => "bx bx-link",
            ],
            [
                "img_portfolio" => "portfolio-2.jpg",
                "icon1" => "bx bx-plus",
                "icon2" => "bx bx-link",

            ],
            [
                "img_portfolio" => "portfolio-3.jpg",
                "icon1" => "bx bx-plus",
                "icon2" => "bx bx-link",

            ],
            [
                "img_portfolio" => "portfolio-4.jpg",
                "icon1" => "bx bx-plus",
                "icon2" => "bx bx-link",

            ],
            [
                "img_portfolio" => "portfolio-5.jpg",
                "icon1" => "bx bx-plus",
                "icon2" => "bx bx-link",

            ],
            [
                "img_portfolio" => "portfolio-6.jpg",
                "icon1" => "bx bx-plus",
                "icon2" => "bx bx-link",

            ],
            [
                "img_portfolio" => "portfolio-7.jpg",
                "icon1" => "bx bx-plus",
                "icon2" => "bx bx-link",

            ],
            [
                "img_portfolio" => "portfolio-8.jpg",
                "icon1" => "bx bx-plus",
                "icon2" => "bx bx-link",

            ],
            [

                "img_portfolio" => "portfolio-9.jpg",
                "icon1" => "bx bx-plus",
                "icon2" => "bx bx-link"
            ]

        ]);
    }
}
