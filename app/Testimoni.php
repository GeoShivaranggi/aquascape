<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'testimoni';
    protected $fillable = [
        'user_id',
        'gambar',
        'keterangan',
    ];
}
