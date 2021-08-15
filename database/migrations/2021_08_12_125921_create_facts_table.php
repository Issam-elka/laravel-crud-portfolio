<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facts', function (Blueprint $table) {
            $table->id();
            $table->string('titreFacts');
            $table->mediumText('p1');
            $table->string('icon1');
            $table->string('span');
            $table->string('p2');
            $table->string('strong1');
            $table->string('icon2');
            $table->string('span2');
            $table->string('p3');
            $table->string('strong2');
            $table->string('icon3');
            $table->string('span3');
            $table->string('p4');
            $table->string('strong3');
            $table->string('icon4');
            $table->string('span4');
            $table->string('p5');
            $table->string('strong4');
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
        Schema::dropIfExists('facts');
    }
}
