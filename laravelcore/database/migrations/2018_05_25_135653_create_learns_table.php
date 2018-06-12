<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learns', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('description');
            $table->text('content');
            $table->text('ext');
            $table->text('type');
            $table->integer('category');
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
        Schema::dropIfExists('learns');
    }
}
