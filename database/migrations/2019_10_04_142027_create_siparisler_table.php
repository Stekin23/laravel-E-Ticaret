<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiparislerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siparisler', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('siparisId');
            $table->integer('urunId');
            $table->integer('durumId');
            $table->integer('odemeSecenekId');
            $table->integer('taksitId');
            $table->date('siparisTarihi');
            $table->integer('kargoId');
            $table->integer('kargoNo');
            $table->date('teslimTarihi');
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
        Schema::dropIfExists('siparisler');
    }
}
