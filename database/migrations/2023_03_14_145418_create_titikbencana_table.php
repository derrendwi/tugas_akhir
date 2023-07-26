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
        Schema::create('titikbencana', function (Blueprint $table) {
            $table->id();
            $table->integer('id_prov');
            $table->string('provinsi')->nullable();
            $table->integer('long');
            $table->integer('lat');
            $table->integer('banjir');
            $table->integer('gelombang_');
            $table->integer('gempabumi');
            $table->integer('kebakaran_');
            $table->integer('kekeringan');
            $table->integer('letusan_gu');
            $table->integer('puting_bel');
            $table->integer('tanah_long');
            $table->string('tanggal_up')->nullable();
            $table->integer('ESRI_OID');
            $table->point('point');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titikbencana');
    }
};
