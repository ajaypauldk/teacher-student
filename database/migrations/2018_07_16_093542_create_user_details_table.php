<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->integer('id')->unsigned()->index();
            $table->string('address');
            $table->string('postal_code');
            $table->string('city');
            $table->string('mobile');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('user_details', function(Blueprint $table)
        {
            $table->foreign('id', 'user_details_fk0')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_details');
    }
}
