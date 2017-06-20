<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absen extends Model
{
	protected $primaryKey = 'id';
    protected $fillable = [
        'nip','tanggal','masuk','keluar','istirahat_mulai','istirahat_selesai'
    ];
}
