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
        Schema::create('detail_kembali', function (Blueprint $table) {
            $table->bigIncrements('id_detail_kembali');
            $table->string('id_kembali', 100)->nullable()->default('text');
            $table->date('tanggal_kembali');
            $table->string('id_pinjam', 100)->nullable()->default('text');
            $table->string('id_buku', 100)->nullable()->default('text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_kembali');
    }
};
