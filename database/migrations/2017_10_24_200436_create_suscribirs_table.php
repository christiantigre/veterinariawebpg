<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuscribirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscribirs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('correo')->nullable();
            $table->text('celular')->nullable();
            $table->text('telefono')->nullable();
            $table->text('comprobante')->nullable();
            $table->text('name_comprobante')->nullable();
            $table->string('numero_control')->nullable();
            $table->string('nombre_depositante')->nullable();
            $table->double('precio_teorico',15,2)->nullable();
            $table->double('precio_practico',15,2)->nullable();
            $table->double('total',15,2)->nullable();
            $table->double('valor_depositado',15,2)->nullable();
            $table->date('fecha_deposito')->nullable();
            $table->date('fecha_suscripcion')->nullable();
            $table->integer('orden_cupo')->nullable();
            $table->integer('tipesuscription_id')->unsigned();
            $table->integer('curso_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('tipesuscription_id')->references('id')->on('typesuscriptions');
            $table->foreign('curso_id')->references('id')->on('courses');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('suscribirs');
    }
}
