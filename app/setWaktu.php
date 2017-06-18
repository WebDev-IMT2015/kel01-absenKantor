<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setWaktu extends Model
{
	protected $primaryKey = 'ids';

    protected $fillable = [
        'masuk','keluar'
    ];
}
