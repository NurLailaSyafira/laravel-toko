<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';

    protected $fillable = [
        'nama_lengkap',
        'email',
        'no_hp',
        'alamat',
        'tanggal_daftar',
    ];
}

