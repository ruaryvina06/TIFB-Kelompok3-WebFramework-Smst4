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

            $table->id();
            $table->bigInteger('id_kembali')->unsigned();
            $table->dateTIme('tanggal_kembali');
            $table->bigInteger('id_pinjam')->unsigned();
            $table->bigInteger('id_buku')->unsigned();
            $table->Integer('qty')->unsigned();
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
        Schema::dropIfExists('detail_kembali');
    }
};
