<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BiodataOrtu extends Model
{
    protected $guarded = [];
    protected $table = "tbl_biodata_ortu";

    public function peserta()
    {
        return $this->belongsTo(PesertaPPDB::class, 'id_peserta_ppdb');
    }

    public function pekerjaan_ayah()
    {
        return $this->belongsTo(PekerjaanOrangtua::class, 'id_pekerjaan_ayah');
    }

    public function pekerjaan_ibu()
    {
        return $this->belongsTo(PekerjaanOrangtua::class, 'id_pekerjaan_ibu');
    }

    public function penghasilan_ayah()
    {
        return $this->belongsTo(PenghasilanOrangtua::class, 'id_penghasilan_ayah');
    }

    public function penghasilan_ibu()
    {
        return $this->belongsTo(PenghasilanOrangtua::class, 'id_penghasilan_ibu');
    }
}