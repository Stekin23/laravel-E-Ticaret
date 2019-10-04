<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkalarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markalar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('markaId');
            $table->string('markaAdi');
            $table->string('markaAciklama');
            $table->string('markaLogo');
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
        Schema::dropIfExists('markalar');
    }
}
