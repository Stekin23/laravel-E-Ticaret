<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrunFiyatlarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urun_fiyatlar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('fiyatId');
            $table->integer('alisFiyatı');
            $table->integer('karOrani');
            $table->integer('urunId');
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
        Schema::dropIfExists('urun_fiyatlar');
    }
}
