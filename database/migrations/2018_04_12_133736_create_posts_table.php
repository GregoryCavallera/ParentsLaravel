<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('community_id')->unsigned();
            $table->integer('channel_id')->unsigned();
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });
        
        Schema::table('posts', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('community_id')->references('id')->on('communities');
            $table->foreign('channel_id')->references('id')->on('channels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
