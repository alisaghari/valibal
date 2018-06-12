<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassweeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classweeks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('lat');
            $table->text('long');
            $table->text('img');
            $table->text('name');
            $table->date('start_date');
            $table->text('start_time');
            $table->integer('count_session');
            $table->integer('capacity');
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
        Schema::dropIfExists('classweeks');
    }
}
