<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostReadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_readers', function (Blueprint $table) {
            $table->integer('post_id')->unsigned()->index();
            $table->integer('reader_id')->unsigned()->index();
            $table->timestamps();
        });
        Schema::table('post_readers', function(Blueprint $table)
        {
            $table->foreign('post_id', 'post_readers_fk0')->references('id')->on('posts')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('reader_id', 'post_readers_fk1')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post_readers');
    }
}
