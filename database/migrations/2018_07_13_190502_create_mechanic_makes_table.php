<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMechanicMakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mechanic_makers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mechanic_id')->unsigned();
            $table->integer('maker_id')->unsigned();
            $table->tinyInteger('status')->comment('0,1')->default(1);
            $table->timestamps();
            $table->softDeletes()->nullable();

            $table->foreign('mechanic_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('maker_id')->references('id')->on('car_makers')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('mechanic_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mechanic_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->tinyInteger('status')->comment('0,1')->default(1);
            $table->timestamps();
            $table->softDeletes()->nullable();

            $table->foreign('mechanic_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('service_id')->references('id')->on('services')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('mechanic_company_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mechanic_id')->unsigned();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('mechanic_id')->references('id')->on('users')
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
        Schema::dropIfExists('mechanic_makers');
        Schema::dropIfExists('mechanic_services');
        Schema::dropIfExists('mechanic_company_details');
    }
}
