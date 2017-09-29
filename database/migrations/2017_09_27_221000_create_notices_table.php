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
        Schema::create('notices', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('link')->nullable();
            $table->string('img')->nullable();
            $table->string('day')->nullable();
            $table->string('month')->nullable();
            $table->string('compfb')->nullable();
            $table->string('comptw')->nullable();
            $table->string('compgg')->nullable();
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
