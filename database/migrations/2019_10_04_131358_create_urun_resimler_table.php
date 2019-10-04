<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrunResimlerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urun_resimler', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('urunResimId');
            $table->integer('urunId');
            $table->string('resimYolu');
            $table->string('katalogResmi');
            $table->string('sliderResmi');
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
        Schema::dropIfExists('urun_resimler');
    }
}
