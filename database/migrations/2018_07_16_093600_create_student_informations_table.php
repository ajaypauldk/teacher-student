<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_informations', function (Blueprint $table) {
            $table->integer('student_user_id')->unsigned()->index();
            $table->integer('teacher_user_id')->unsigned()->index();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('student_informations', function(Blueprint $table)
        {
            $table->foreign('student_user_id', 'student_informations_fk0')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('teacher_user_id', 'student_informations_fk1')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('student_informations');
    }
}
