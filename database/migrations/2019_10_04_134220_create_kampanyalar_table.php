<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKampanyalarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kampanyalar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kampanyaId');
            $table->integer('urunId');
            $table->integer('indirimOrani');
            $table->date('baslangicTarihi');
            $table->date('bitisTarihi');
            $table->string('kampanyaBasligi');
            $table->string('kampanyaAciklamasi');
            $table->string('kampanyaGorseli');
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
        Schema::dropIfExists('kampanyalar');
    }
}
