<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->text('file_name')->nullable();
            $table->text('file_size')->nullable();
            $table->text('file_mime')->nullable();
            $table->text('file_path')->nullable();
            $table->boolean('destacada',1)->default(0);
            $table->string('title', 150)->nullable();
            $table->text('intro')->nullable();
            $table->text('content')->nullable();
            $table->string('img', 150)->nullable();
            $table->string('nameimg', 150)->nullable();
            $table->string('link', 150)->nullable();
            $table->integer('category_id')->unsigned();
            $table->integer('albun_id')->unsigned();
            $table->foreign('albun_id')->references('id')->on('albuns');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::drop('images');
    }
}
