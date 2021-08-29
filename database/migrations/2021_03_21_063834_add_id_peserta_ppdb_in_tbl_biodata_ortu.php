<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdPesertaPpdbInTblBiodataOrtu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_biodata_ortu', function (Blueprint $table) {

            $table->unsignedBigInteger('id_peserta_ppdb');
            $table->foreign('id_peserta_ppdb')
            ->references('id')
            ->on('tbl_peserta_ppdb')
            ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_biodata_ortu', function (Blueprint $table) {
            //
        });
    }
}
