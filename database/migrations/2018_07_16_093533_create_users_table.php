<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('user_role_id')->unsigned()->index();
            $table->tinyInteger('status')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('users', function(Blueprint $table)
        {
            $table->foreign('user_role_id', 'users_fk0')->references('id')->on('roles')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}


