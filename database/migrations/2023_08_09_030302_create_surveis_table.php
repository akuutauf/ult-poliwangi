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
        Schema::create('surveis', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('rating')->nullable(false)->default(1);
            $table->string('nama', 255)->nullable(false);
            $table->string('email', 255)->nullable(false);
            $table->text('saran', 255)->nullable(true);
            $table->string('id_pengajuan')->nullable(false);
            $table->foreign('id_pengajuan')->references('id')->on('pengajuans')->onDelete('cascade');
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
        Schema::dropIfExists('surveis');
    }
};