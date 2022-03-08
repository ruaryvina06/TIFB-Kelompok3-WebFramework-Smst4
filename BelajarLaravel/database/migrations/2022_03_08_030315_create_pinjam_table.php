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
        Schema::create('pinjam', function (Blueprint $table) {
            $table->bigIncrements('id_pinjam');
            $table->date('tanggal_pinjam');
            $table->string('id_buku', 100)->nullable()->default('text');
            $table->string('id_anggota', 100)->nullable()->default('text');
            $table->string('id_petugas', 100)->nullable()->default('text');
            // $table->dropForeign('id_buku');
            // $table->dropForeign('id_anggota');
            // $table->dropForeign('id_petugas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjam');
    }
};
