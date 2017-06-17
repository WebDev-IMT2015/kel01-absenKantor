<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tambahPegawai extends Model
{
	protected $primaryKey = 'nip';

    protected $fillable = [
        'name','jabatan'
    ];
}
