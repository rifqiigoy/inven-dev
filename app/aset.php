<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aset extends Model
{
    protected $table = 'aset';
    protected $fillable = ['nama', 'kode', 'register', 'kib', 'lokasi', 'merk', 'tahun', 'jumlah', 'harga', 'nilai', 'akumulasi', 'keterangan'];

    public function ruangan()
    {
        return $this->belongsTo(ruangan::class);
    }
}
