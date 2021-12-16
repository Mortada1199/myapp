<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenificariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benificaries', function (Blueprint $table) {
            $table->id();
            $table ->string('name')->unique();
            $table ->string('password');
            $table ->string('phone');
            $table ->string('state');
            $table ->string('image');
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
        Schema::dropIfExists('benificaries');
    }
}
