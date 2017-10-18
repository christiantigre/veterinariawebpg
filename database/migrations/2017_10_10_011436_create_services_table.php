<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function(Blueprint $table) {
            $table->increments('id');
            $table->string('service',150)->nullable();
            $table->string('slug',150)->nullable();
            $table->text('description')->nullable();
            $table->double('precio_venta',15,2)->nullable();
            $table->double('porcent_descuento',15,2)->nullable();
            $table->string('img',150)->nullable();
            $table->boolean('visible_slider')->default(1);
            $table->boolean('promocion')->default(1);
            $table->boolean('nuevo')->default(1);
            $table->boolean('oferta')->default(1);
            $table->boolean('is_active')->default(1);
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
        Schema::drop('services');
    }
}
