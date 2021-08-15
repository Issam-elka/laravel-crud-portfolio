<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('titreContact');
            $table->mediumText('p');
            $table->string('icon1');
            $table->string('titre1');
            $table->string('p1');
            $table->string('icon2');
            $table->string('titre2');
            $table->string('p2');
            $table->string('icon3');
            $table->string('titre3');
            $table->string('p3');
            $table->string('formName');
            $table->string('formEmail');
            $table->string('formSubject');
            $table->string('formMessage');
            $table->string('btn');
            


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
        Schema::dropIfExists('contacts');
    }
}
