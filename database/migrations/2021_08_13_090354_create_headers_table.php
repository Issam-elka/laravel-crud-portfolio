<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('h1');
            $table->string('icon1');
            $table->string('icon2');
            $table->string('icon3');
            $table->string('icon4');
            $table->string('icon5');
            $table->string('nav1');
            $table->string('nav2');
            $table->string('nav3');
            $table->string('nav4');
            $table->string('nav5');
            $table->string('btn_icon');
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
        Schema::dropIfExists('headers');
    }
}
