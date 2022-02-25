<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PelamarModel extends Model
{
    protected $table = 'pelamar';
    protected $fillable = ['posisi',
    					  'nama',
    					  'ktp',
    					  'tempat_tgl_lahir',
    					  'jenis_kelamin',
    					  'agama',
    					  'gol_darah',
    					  'status',
    					  'alamat_ktp',
    					  'alamat_tinggal',
    					  'email',
    					  'no_telp',
    					  'no_orgterdekat'];
}
