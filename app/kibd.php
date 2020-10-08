<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kibd extends Model
{
    protected $table = 'kibd';
    protected $fillable = ['kode', 'nama', 'alamat', 'luas', 'bulan', 'tahun', 'nilai', 'umur', 'opd', 'sub_opd', 'kota', 'keterangan'];
}
