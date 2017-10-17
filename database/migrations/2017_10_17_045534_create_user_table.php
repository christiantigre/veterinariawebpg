<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',191);
            $table->string('nombres',50)->nullable();
            $table->string('apellidos',50)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('telefono',50)->nullable();
            $table->string('celular',50)->nullable();
            $table->string('domicilio',50)->nullable();
            $table->text('img')->nullable();
            $table->boolean('activo')->default(1);
            $table->string('email',191)->unique();
            $table->string('password',191);
            $table->integer('id_country')->unsigned()->defaul(66);
            $table->foreign('id_country')->references('id')->on('countries');
            $table->integer('id_province')->unsigned()->default(1);
            $table->foreign('id_province')->references('id')->on('provinces');
            $table->integer('id_gender')->unsigned()->defaul(1);
            $table->foreign('id_gender')->references('id')->on('genders');
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
        Schema::dropIfExists('user');
    }
}
