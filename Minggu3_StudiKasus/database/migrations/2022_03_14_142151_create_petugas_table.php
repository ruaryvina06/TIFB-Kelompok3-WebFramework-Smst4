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
        Schema::create('petugas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_petugas', 50);
            $table->string('jenis_kelamin', 10);
            $table->string('jabatan', 15);
            $table->string('no_hp', 15);
            $table->text('alamat')->nullable();
            $table->timestamps();

            //jk, jabatan, alamat, no hp, jam kerja
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas');
    }
};
