<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarMakerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_makers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('car_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('car_maker_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('car_maker_id')->references('id')->on('car_makers')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_models');
        Schema::dropIfExists('car_makers');
    }
}
