<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->text("h8");
            $table->text("h10");
            $table->text("h12");
            $table->text("h14");
            $table->text("h16");
            $table->text("h18");
            $table->text("h20");
            $table->text("h22");
            $table->text("day");
            $table->integer("day_number");
            $table->integer("product_id");
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
        Schema::dropIfExists('programs');
    }
}
