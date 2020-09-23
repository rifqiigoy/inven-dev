<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $table = 'ruangan';

    public function aset()
    {
        return $this->hasOne(aset::class);
    }
}
