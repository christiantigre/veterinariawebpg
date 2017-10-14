<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 150)->nullable();
            $table->text('subtitle')->nullable();
            $table->text('subtitle2')->nullable();
            $table->text('subtitle3')->nullable();
            $table->text('intro')->nullable();
            $table->text('paragraph')->nullable();
            $table->text('detall')->nullable();
            $table->text('linkcard')->nullable();
            $table->text('img')->nullable();
            $table->text('imgHeader')->nullable();
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
        Schema::drop('cards');
    }
}
