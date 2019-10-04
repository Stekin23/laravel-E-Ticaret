<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOzellikDetayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ozellik_detay', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ozellikDetayId');
            $table->string('aciklama');
            $table->integer('ozellikId');
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
        Schema::dropIfExists('ozellik_detay');
    }
}
