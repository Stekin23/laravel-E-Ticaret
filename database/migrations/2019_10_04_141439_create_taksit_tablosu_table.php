<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaksitTablosuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taksit_tablosu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('taksitTabloId');
            $table->integer('taksitSayisi');
            $table->integer('taksitTutari');
            $table->integer('toplamTutar');
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
        Schema::dropIfExists('taksit_tablosu');
    }
}
