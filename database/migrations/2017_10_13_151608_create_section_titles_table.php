<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSectionTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_titles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('section',50)->nullable();
            $table->string('title',150)->nullable();
            $table->string('subtitle',350)->nullable();
            $table->string('color',15)->nullable();
            $table->boolean('visible')->default(1);
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
        Schema::drop('section_titles');
    }
}
