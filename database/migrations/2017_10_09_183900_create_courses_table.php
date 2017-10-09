<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title',150)->nullable();
            $table->text('content')->nullable();
            $table->string('img',150)->nullable();
            $table->string('link',150)->nullable();
            $table->boolean('visible')->default(1);
            $table->integer('tipecourse_id')->unsigned();
            $table->foreign('tipecourse_id')->references('id')->on('type_courses');
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
        Schema::drop('courses');
    }
}
