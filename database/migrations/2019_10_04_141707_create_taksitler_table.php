<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaksitlerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taksitler', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('taksitId');
            $table->integer('bankaId');
            $table->integer('urunId');
            $table->integer('taksitTabloId');
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
        Schema::dropIfExists('taksitler');
    }
}
