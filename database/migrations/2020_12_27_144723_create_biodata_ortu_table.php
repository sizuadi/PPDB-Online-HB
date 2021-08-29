<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataOrtuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_biodata_ortu', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_pekerjaan_ayah');
            $table->foreign('id_pekerjaan_ayah')
            ->references('id')
            ->on('tbl_pekerjaan_ortu')
            ->onDelete('cascade');

            $table->unsignedBigInteger('id_pekerjaan_ibu');
            $table->foreign('id_pekerjaan_ibu')
            ->references('id')
            ->on('tbl_pekerjaan_ortu')
            ->onDelete('cascade');

            $table->unsignedBigInteger('id_penghasilan_ayah');
            $table->foreign('id_penghasilan_ayah')
            ->references('id')
            ->on('tbl_penghasilan_ortu')
            ->onDelete('cascade');

            $table->unsignedBigInteger('id_penghasilan_ibu');
            $table->foreign('id_penghasilan_ibu')
            ->references('id')
            ->on('tbl_penghasilan_ortu')
            ->onDelete('cascade');

            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->BigInteger('no_tlp');
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
        Schema::dropIfExists('tbl_biodata_ortu');
    }
}
