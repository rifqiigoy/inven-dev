<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kibc extends Model
{
    protected $table = 'kibc';
    protected $fillable = ['kode', 'nama', 'alamat', 'luas', 'bulan', 'tahun', 'asal', 'umur', 'opd', 'sub_opd', 'kota', 'keterangan'];
}
