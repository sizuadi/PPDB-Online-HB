<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_hasil', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('id_jurusan');
            $table->foreign('id_jurusan')
            ->references('id')
            ->on('tbl_jurusan')
            ->onDelete('cascade');

            $table->unsignedBigInteger('nis');
            $table->foreign('nis')
            ->references('id')
            ->on('tbl_peserta_ppdb')
            ->onDelete('cascade');

            $table->string('nama');
            $table->string('asal_sekolah');
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
        Schema::dropIfExists('tbl_hasil');
    }
}
