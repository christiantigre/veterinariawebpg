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
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('fb')->nullable();
            $table->string('tw')->nullable();
            $table->string('in')->nullable();
            $table->string('gg')->nullable();
            $table->string('lk')->nullable();
            $table->string('especialitation')->nullable();
            $table->string('blog')->nullable();
            $table->string('workplacelink')->nullable();
            $table->string('workplace')->nullable();
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
