<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVeterinariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veterinaries', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name',150);
            $table->string('address',150)->nullable();
            $table->string('tlf1',18)->nullable();
            $table->string('tlf2',18)->nullable();
            $table->string('cel1',18)->nullable();
            $table->string('cel2',18)->nullable();
            $table->string('mail',45)->nullable();
            $table->string('linkweb',150)->nullable();
            $table->string('prop',150)->nullable();
            $table->string('gerent',150)->nullable();
            $table->string('area',150)->nullable();
            $table->string('description',500)->nullable();
            $table->string('logo',150)->nullable();
            $table->string('namelogo',150)->nullable();
            $table->date('datestart')->nullable();
            $table->string('ruc',20)->nullable();
            $table->string('razonsocial',150)->nullable();
            $table->string('fb',150)->nullable();
            $table->string('tw',150)->nullable();
            $table->string('in',150)->nullable();
            $table->string('yt',150)->nullable();
            $table->string('gg',150)->nullable();
            $table->string('latitud',50)->nullable();
            $table->string('longitud',50)->nullable();
            $table->text('mision')->nullable();
            $table->text('vision')->nullable();
            $table->string('fax',50)->nullable();
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
        Schema::drop('veterinaries');
    }
}
