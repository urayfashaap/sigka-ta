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
        Schema::create('titik_pemantauan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->decimal('latitude', $precision = 8, $scale = 6);
            $table->decimal('longitude', $precision = 9, $scale = 6);
            $table->string('nama_sungai');
            $table->string('kecamatan')
                ->nullable();
            // $table->unsignedInteger('mutu_air')
            //     ->nullable();
            // $table->foreign('mutu_air')->references('id_mutu')->on('status_mutu')->onDelete('cascade');
            $table->unsignedsmallInteger('mutu_air')
                ->nullable();
            $table->foreign('mutu_air')->references('id')->on('status_mutu');
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
        Schema::dropIfExists('titik_pemantauan');
    }
};
