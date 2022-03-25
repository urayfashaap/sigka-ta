<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_pemantauan', function (Blueprint $table) {
            $table->unsignedBigInteger('titik_pemantauan');
            $table->foreign('titik_pemantauan')->references('id_titik')->on('titik_pemantauan');
            $table->date('tanggal_pemantauan');
            $table->time('waktu_pemantauan');
            $table->string('laboratorium');
            $table->string('cuaca');
            $table->string('temperatur');
            $table->string('tds');
            $table->string('tss');
            $table->string('ph');
            $table->string('bod');
            $table->string('cod');
            $table->string('do');
            $table->string('sulfat');
            $table->string('klorida');
            $table->string('amoniak');
            $table->string('fosfat');
            $table->string('sianida');
            $table->string('merkuri');
            $table->string('besi');
            $table->string('mangan');
            $table->string('seng');
            $table->string('kromium');
            $table->string('detergen');
            $table->string('fenol');
            $table->string('fecal_coliform');
            $table->string('total_coliform');
            $table->softDeletes();
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
        Schema::dropIfExists('hasil_pemantauan');
    }
};
