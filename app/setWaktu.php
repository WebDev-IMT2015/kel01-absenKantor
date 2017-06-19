<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setWaktu extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','masuk','keluar','istirahat_mulai','istirahat_selesai','toleransi'
    ];
}
