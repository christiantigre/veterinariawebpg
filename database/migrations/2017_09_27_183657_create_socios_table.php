<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function(Blueprint $table) {
            $table->increments('id');
            $table->string('img')->nullable();
            $table->text('description')->nullable();
            $table->string('abrevTitulo',15)->nullable();
            $table->string('name',50)->nullable();
            $table->string('lastname',50)->nullable();
            $table->string('fb',150)->nullable();
            $table->string('tw',150)->nullable();
            $table->string('in',150)->nullable();
            $table->string('gg',150)->nullable();
            $table->string('lk',150)->nullable();
            $table->string('especialitation',150)->nullable();
            $table->string('blog',150)->nullable();
            $table->string('workplacelink',150)->nullable();
            $table->string('workplace',150)->nullable();
            $table->boolean('is_active')->default(1);
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
        Schema::drop('socios');
    }
}
