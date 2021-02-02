<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotation_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id')->unsigned();
            $table->integer('area_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->tinyInteger('with_in_time')->comment('10=Urgent, 20=This Week, 30=Two Week')->default(10);
            $table->tinyInteger('status')->comment('10=Pending, 20=In Progress, 30=Complete')->default(10);
            $table->timestamps();
            $table->softDeletes()->nullable();

            $table->foreign('car_id')->references('id')->on('driver_cars')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('area_id')->references('id')->on('areas')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('service_id')->references('id')->on('services')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('quotations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mechanic_id')->unsigned();
            $table->integer('quotation_request_id')->unsigned();
            $table->double('amount', 8, 2);
            $table->string('message');
            $table->tinyInteger('status')->dafult(10)->comment('10=pending, 20=Accepted, 30=Rejected');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('mechanic_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('quotation_request_id')->references('id')->on('quotation_requests')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('quotation_request_pending', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quotation_request_id')->unsigned();
            $table->integer('mechanic_id')->unsigned();
            $table->tinyInteger('status')->comment('0,1')->default(0);
            $table->timestamps();
            $table->softDeletes()->nullable();

            $table->foreign('mechanic_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('quotation_request_id')->references('id')->on('quotation_requests')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('quotation_request_media', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quotation_request_id')->unsigned();
            $table->string('name');
            $table->tinyInteger('type')->dafault(10);
            $table->string('path');
            $table->timestamps();
            $table->softDeletes()->nullable();

            $table->foreign('quotation_request_id')->references('id')->on('quotation_requests')
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
        Schema::dropIfExists('quotation_request_pending');
        Schema::dropIfExists('quotation_request_media');
        Schema::dropIfExists('quotations');
        Schema::dropIfExists('quotation_requests');
    }
}
