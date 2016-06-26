<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
                                    $table->increments('id');
                                    $table->integer('student_id')->unsigned();
                                    $table->foreign('student_id')->references('id')->on('students');
                                    $table->integer('lecturer_id')->unsigned();
                                    $table->foreign('lecturer_id')->references('id')->on('lecturers');
                                    $table->integer('courses')->unsigned();
                                    $table->foreign('courses')->references('id')->on('courses');
                                    $table->string('year',9);
                                    $table->tinyinteger('session');
                                    $table->string('grade_received', 1)->nullable();
                                    $table->text('comments')->nullable();
                                    $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('evaluations');
    }
}
