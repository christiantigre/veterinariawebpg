<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClasificationCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasification_courses', function(Blueprint $table) {
            $table->increments('id');
            $table->string('clasification',150)->nullable();
            $table->text('body')->nullable();
            $table->text('slug')->nullable();
            $table->boolean('visible')->default(1);
            $table->integer('typecourse_id')->unsigned();
            $table->foreign('typecourse_id')->references('id')->on('type_courses');
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
        Schema::drop('clasification_courses');
    }
}
