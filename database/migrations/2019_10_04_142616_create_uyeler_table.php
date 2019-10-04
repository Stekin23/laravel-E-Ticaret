<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUyelerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uyeler', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('uyeId');
            $table->integer('RolId');
            $table->string('ad');
            $table->string('soyad');
            $table->integer('tckNo');
            $table->integer('ulkeId');
            $table->integer('sehirId');
            $table->integer('ilceId');
            $table->string('adres');
            $table->string('eMail');
            $table->integer('cepTel');
            $table->string('parola');
            $table->string('guvelikSorusu');
            $table->string('guvenlikSoruCevap');
            $table->date('uyeKayitTarihi');
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
        Schema::dropIfExists('uyeler');
    }
}
