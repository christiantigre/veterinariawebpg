<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name',150)->nullable();
            $table->string('slug',150)->nullable();
            $table->string('cod',30)->nullable();
            $table->text('description')->nullable();
            $table->double('precio_compra',15,2)->nullable();
            $table->double('precio_venta',15,2)->nullable();
            $table->double('porcent_descuento',15,2)->nullable();
            $table->integer('stock')->nullable();
            $table->integer('vendidos')->nullable();
            $table->string('img',150)->nullable();
            $table->string('nameimg',150)->nullable();
            $table->boolean('visible')->default(1);
            $table->boolean('visible_slider')->default(1);
            $table->boolean('promocion')->default(1);
            $table->boolean('nuevo')->default(1);
            $table->boolean('oferta')->default(1);
            $table->integer('tipeproduct_id')->unsigned();
            $table->foreign('tipeproduct_id')->references('id')->on('typeproducts');
            $table->integer('admins_id')->unsigned()->default(1);
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
        Schema::drop('products');
    }
}
