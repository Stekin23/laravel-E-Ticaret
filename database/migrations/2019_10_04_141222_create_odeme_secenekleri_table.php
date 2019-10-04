<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdemeSecenekleriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odeme_secenekleri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('odemeSecenekId');
            $table->string('odemeTipi');
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
        Schema::dropIfExists('odeme_secenekleri');
    }
}
