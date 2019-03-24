<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacebookUserLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facebook_user_log', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('user_posts')->nullable();
            $table->longText('user_likes')->nullable();
            $table->timestamps();
            $table->unsignedInteger('user_id');
            $table->longText('split_posts')->nullable();
            $table->longText('split_likes')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facebook_user_log');
    }
}