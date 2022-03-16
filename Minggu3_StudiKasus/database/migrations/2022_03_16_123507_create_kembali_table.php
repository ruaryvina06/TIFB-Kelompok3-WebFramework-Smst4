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
        Schema::create('kembali', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal_kembali');
            $table->foreignId('id_buku')->constrained('buku')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_anggota')->constrained('anggota')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_petugas')->constrained('petugas')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('qty');
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
        Schema::dropIfExists('kembali');
    }
};
