<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',191)->nullable;
            $table->string('nombres',50)->nullable();
            $table->string('apellidos',50)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('telefono',50)->nullable();
            $table->string('celular',50)->nullable();
            $table->string('domicilio',150)->nullable();
            $table->string('email',191)->unique();
            $table->text('img')->nullable();
            $table->text('educacion')->nullable();
            $table->text('frase')->nullable();
            $table->text('abrev')->nullable();
            $table->text('pais')->nullable();
            $table->text('ciudad')->nullable();
            $table->text('nameimg')->nullable();
            $table->string('password',191);
            $table->boolean('activo')->default(1);
            $table->rememberToken();
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
        Schema::drop('admins');
    }
}
