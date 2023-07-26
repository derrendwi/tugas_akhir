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
        Schema::create('datawiup', function (Blueprint $table) {
            $table->id();
            $table->string('pulau')->nullable();
            $table->string('pejabat')->nullable();
            $table->string('id_prov')->nullable();
            $table->string('nama_prov')->nullable();
            $table->string('id_kab')->nullable();
            $table->string('nama_kab')->nullable();
            $table->string('jenis_izin')->nullable();
            $table->string('badan_usah')->nullable();
            $table->string('nama_usaha')->nullable();
            $table->string('kode_wiup')->nullable();
            $table->string('sk_iup')->nullable();
            $table->string('tgl_berlak')->nullable();
            $table->string('tgl_akhir')->nullable();
            $table->string('kegiatan')->nullable();
            $table->string('luas_sk')->nullable();
            $table->string('komoditas')->nullable();
            $table->string('kode_golon')->nullable();
            $table->string('kode_jnsko')->nullable();
            $table->string('cnc')->nullable();
            $table->string('generasi')->nullable();
            $table->string('kode_wil')->nullable();
            $table->string('lokasi')->nullable();
            $table->polygon('polygon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datawiup');
    }
};
