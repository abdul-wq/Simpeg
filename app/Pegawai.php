<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table= 'pegawai';
    protected $fillable= ['nama', 'tgl_lahir', 'alamat', 'no_telp', 'jabatan'];
}
