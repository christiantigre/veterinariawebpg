<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 150)->nullable();
            $table->text('intro')->nullable();
            $table->text('content')->nullable();
            $table->string('link', 150)->nullable();
            $table->double('precio',15,2)->nullable();
            $table->integer('asistire')->nullable();
            $table->integer('prec')->nullable();
            $table->integer('mens')->nullable();
            $table->date('fechainit')->nullable();
            $table->string('img', 150)->nullable();
            $table->string('day', 150)->nullable();
            $table->string('month', 50)->nullable();
            $table->text('compfb')->nullable();
            $table->text('comptw')->nullable();
            $table->text('compgg')->nullable();
            $table->boolean('visible')->nullable()->default(1);
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
        Schema::drop('notices');
    }
}
