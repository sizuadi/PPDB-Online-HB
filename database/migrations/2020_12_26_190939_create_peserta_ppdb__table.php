<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaPpdbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_peserta_ppdb', function (Blueprint $table) {
            $table->id();                                                

            //jenis_kelamin relasi
            $table->unsignedBigInteger('id_jenis_kelamin');
            $table->foreign('id_jenis_kelamin')
            ->references('id')
            ->on('tbl_jenis_kelamin')
            ->onDelete('cascade');

            //agama relasi
            $table->unsignedBigInteger('id_agama');
            $table->foreign('id_agama')
            ->references('id')
            ->on('tbl_agama')
            ->onDelete('cascade');

            //Penghasilam Ortu relasi
            $table->unsignedBigInteger('id_penghasilan_ortu');
            $table->foreign('id_penghasilan_ortu')
            ->references('id')
            ->on('tbl_penghasilan_ortu')
            ->onDelete('cascade');

            //Pekerjaan Ortu relasi
            $table->unsignedBigInteger('id_pekerjaan_ortu');
            $table->foreign('id_pekerjaan_ortu')
            ->references('id')
            ->on('tbl_pekerjaan_ortu')
            ->onDelete('cascade');

            //Jurusan relasi
            $table->unsignedBigInteger('id_jurusan');
            $table->foreign('id_jurusan')
            ->references('id')
            ->on('tbl_pekerjaan_ortu')
            ->onDelete('cascade');

            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('asal_sekolah');
            $table->longText('alamat');
            $table->string('no_telp');
            $table->string('nama_ortu');
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
        Schema::dropIfExists('tbl_peserta_ppdb');
    }
}
