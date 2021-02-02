<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('last_message_id')->unsigned()->nullable();
            $table->integer('created_by')->unsigned();
            $table->tinyInteger('type')->default(10)->comment('10=Single, 20=Group');
            $table->tinyInteger('status')->default(0)->comment('0,1');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('created_by')->references('id')->on('users')
                ->onUpdate('cascade');

        });

        Schema::create('thread_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thread_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('thread_id')->references('id')->on('threads')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade');
        });

        Schema::create('thread_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thread_id')->unsigned();
            $table->integer('sender_id')->unsigned();
            $table->text('message');
            $table->tinyInteger('type')->default(1)->comment('0,1');
            $table->tinyInteger('status')->default(0)->comment('0,1');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('thread_id')->references('id')->on('threads')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('sender_id')->references('id')->on('users')
                ->onUpdate('cascade');
        });

        Schema::create('thread_message_status', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('message_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->tinyInteger('message_status')->default(10)->comment('10=Pending, 20=Delivered, 30=Read');
            $table->tinyInteger('status')->default(0)->comment('0,1');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('message_id')->references('id')->on('thread_messages')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thread_message_status');
        Schema::dropIfExists('thread_messages');
        Schema::dropIfExists('thread_users');
        Schema::dropIfExists('threads');
    }
}
