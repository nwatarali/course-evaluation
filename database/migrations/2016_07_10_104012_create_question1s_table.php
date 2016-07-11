<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestion1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('department');
            $table->string('lecturer');
            $table->string('course');
            $table->text('comment');
            $table->string('grade', 1);
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
        Schema::drop('question1s');
    }
}
