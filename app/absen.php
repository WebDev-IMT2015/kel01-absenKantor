<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absen extends Model
{
    protected $fillable = [
        'nip','tanggal','masuk','keluar','istirahat_mulai','istirahat_selesai','toleransi'
    ];
}
