<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                "titreAbout" => "About",
                "p1" => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
                "h3" => "UI/UX Designer &amp; Web Developer.",
                "p2" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore
            magna aliqua.",
            'img' => 'profile-img.jpg',
                "li_birthday" => "Birthday:",
                "birthday" => "1 May 1995",
                "li_website" => "Website:",
                "website" => "www.example.com",
                "li_phone" => "Phone:",
                "phone" => "+123 456 7890",
                "li_city" => "City:",
                "city" => "City : New York,
            USA",
                "li_age" => "Age:",
                "age" => 30,
                "li_degree" => "Degree",
                "degree" => "Master",
                "li_email" => "phEmailone:",
                "email" => "email@example.com",
                "li_freelance" => "Freelance",
                "freelance" => "Available",
                "p3" => "Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores."
            ]

        ]);
    }
}
