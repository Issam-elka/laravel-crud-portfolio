<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            ["titreContact" => "Contact",
            "p" => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
            "icon1" => "icofont-google-map",
            "titre1" => "Location:",
            "p1" => "A108 Adam Street, New York, NY 535022",
            "icon2" => "icofont-envelope",
            "titre2" => "Email:",
            "p2" => "info@example.com",
            "icon3" => "icofont-phone",
            "titre3" => "Call:",
            "p3" => "+1 5589 55488 55s",
            "formName" => "Your Name",
            "formEmail" => "Your Email",
            "formSubject" => "Subject",
            "formMessage" => "Message",
            "btn" => "Send your message"]
        ]);
    }
}
