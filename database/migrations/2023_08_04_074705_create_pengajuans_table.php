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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemohon', 255)->nullable(false);
            $table->string('jenis_permohonan', 255)->nullable(false);
            $table->date('tanggal_permohonan', 255)->nullable(false);
            $table->string('status')->nullable(false);
            $table->string('kode_tiket', 255)->nullable(false);
            $table->unsignedBigInteger('id_layanan')->nullable(false);
            $table->foreign('id_layanan')->references('id')->on('layanans')->onDelete('cascade');
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
        Schema::dropIfExists('pengajuans');
    }
};
