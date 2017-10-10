<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function(Blueprint $table) {
            $table->increments('id');
            $table->string('img',150)->nullable();
            $table->text('description')->nullable();
            $table->string('name',75)->nullable();
            $table->string('lastname',75)->nullable();
            $table->string('fb',150)->nullable();
            $table->string('tw',150)->nullable();
            $table->string('in',150)->nullable();
            $table->string('gg',150)->nullable();
            $table->string('lk',150)->nullable();
            $table->string('especialitation',150)->nullable();
            $table->date('datenac')->nullable();
            $table->string('workplace',150)->nullable();
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
        Schema::drop('tutors');
    }
}
