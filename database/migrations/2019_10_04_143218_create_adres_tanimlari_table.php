<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdresTanimlariTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adres_tanimlari', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('uyeId');
            $table->string('adresTanimi');
            $table->string('ad');
            $table->string('soyad');
            $table->string('firma');
            $table->integer('ulkeId');
            $table->integer('sehirId');
            $table->integer('ilceId');
            $table->string('adres');
            $table->integer('tckNo');
            $table->string('vergiDairesi');
            $table->integer('vergiNo');
            $table->integer('cepTel');
            $table->string('adress');
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
        Schema::dropIfExists('adres_tanimlari');
    }
}
