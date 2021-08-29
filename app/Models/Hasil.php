<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    protected $guarded = [];
    protected $table = "tbl_hasil";

    public function peserta()
    {
        return $this->hasOne(PesertaPPDB::class, 'id', 'nis');
    }
}