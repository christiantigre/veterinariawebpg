<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title',150)->nullable();
            $table->string('subtitle',150)->nullable();
            $table->text('intro')->nullable();
            $table->text('description')->nullable();
            $table->string('link',150)->nullable();
            $table->string('name')->nullable();
            $table->text('imgHeader')->nullable();
            $table->text('nameimg')->nullable();
            $table->boolean('visible')->nullable()->defaul(1);
            $table->boolean('webvisible')->nullable()->defaul(1);
            $table->integer('visit')->nullable();
            $table->integer('like')->nullable();
            $table->integer('share')->nullable()->default(1);
            $table->integer('tag_id')->unsigned()->default(1);
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->integer('admins_id')->unsigned()->default(1);;
            $table->foreign('admins_id')->references('id')->on('admins');
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
        Schema::drop('notes');
    }
}
