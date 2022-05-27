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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('titik_pemantauan');
            $table->foreign('titik_pemantauan')->references('id')->on('titik_pemantauan');
            $table->date('tanggal_pemantauan');
            $table->time('waktu_pemantauan');
            $table->string('laboratorium')->nullable();
            $table->string('cuaca')->nullable();
            $table->double('temperatur')->nullable();
            $table->double('tds')->nullable();
            $table->double('tss')->nullable();
            $table->double('ph')->nullable();
            $table->double('bod')->nullable();
            $table->double('cod')->nullable();
            $table->double('do')->nullable();
            $table->double('sulfat')->nullable();
            $table->double('clorida')->nullable();
            $table->double('nitrat')->nullable();
            $table->double('nitrit')->nullable();
            $table->double('amoniak')->nullable();
            $table->double('fosfat')->nullable();
            $table->double('sianida')->nullable();
            $table->double('merkuri')->nullable();
            $table->double('besi')->nullable();
            $table->double('mangan')->nullable();
            $table->double('seng')->nullable();
            $table->double('kromium')->nullable();
            $table->double('detergen')->nullable();
            $table->double('fenol')->nullable();
            $table->double('fecal_coliform')->nullable();
            $table->double('total_coliform')->nullable();
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
