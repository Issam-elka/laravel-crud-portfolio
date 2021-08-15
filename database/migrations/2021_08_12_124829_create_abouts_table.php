<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('titreAbout');
            $table->mediumText('p1');
            $table->string('img');
            $table->string('h3');
            $table->mediumText('p2');
            $table->string('li_birthday');
            $table->string('birthday');
            $table->string('li_website');
            $table->string('website');
            $table->string('li_phone');
            $table->string('phone');
            $table->string('li_city');
            $table->string('city');
            $table->string('li_age');
            $table->integer('age');
            $table->string('li_degree');
            $table->string('degree');
            $table->string('li_email');
            $table->string('email');
            $table->string('li_freelance');
            $table->string('freelance');
            $table->mediumText('p3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
