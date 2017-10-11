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
            $table->string('subtitle',150)->nullable();
            $table->text('content')->nullable();
            $table->text('description')->nullable();
            $table->text('duration')->nullable();
            $table->text('hours')->nullable();
            $table->text('hourdesde')->nullable();
            $table->text('hourhasta')->nullable();
            $table->text('dais')->nullable();
            $table->text('precio')->nullable();
            $table->date('fechainit')->nullable();
            $table->string('img',150)->nullable();
            $table->string('nameimg',150)->nullable();
            $table->string('video',150)->nullable();
            $table->string('link',150)->nullable();
            $table->boolean('visible')->default(1);
            $table->integer('clasification_id')->unsigned();
            $table->foreign('clasification_id')->references('id')->on('clasification_courses');
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
