<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesertaPPDB extends Model
{
    protected $guarded = [];    

    protected $table = "tbl_peserta_ppdb";

    public function orang_tua()
    {
        return $this->hasOne(BiodataOrtu::class, 'id_peserta_ppdb','id');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }

    public function agama()
    {
        return $this->belongsTo(Agama::class, 'id_agama');
    }

    public function jenkel()
    {
        return $this->belongsTo(JenisKelamin::class, 'id_jenis_kelamin');
    }
}