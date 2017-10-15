<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img', 191)->nullable();
            $table->text('title')->nullable();
            $table->text('subtittle')->nullable();
            $table->text('intro')->nullable();
            $table->text('body')->nullable();
            $table->text('linkinfo')->nullable();
            $table->boolean('visible_slider')->default(1);
            $table->boolean('activo')->default(1);
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
        Schema::drop('sliders');
    }
}
