<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlisverisSepetiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alisveris_sepeti', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sepetId');
            $table->integer('urunId');
            $table->dateTime('rezervasyonSuresi');
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
        Schema::dropIfExists('alisveris_sepeti');
    }
}
