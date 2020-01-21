<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHumanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('human', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',255);
            $table->string('middle_name',255);
            $table->string('last_name',255);
            $table->string('email',255)->unique();
            $table->string('password',255);
            $table->integer('age');
            $table->integer('gender');
            $table->string('address',255);
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
        Schema::dropIfExists('human');
    }
}
