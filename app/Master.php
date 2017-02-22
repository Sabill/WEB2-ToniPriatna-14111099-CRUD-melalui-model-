<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $table = 'mst_pengguna';
    protected $fillable = ['nama_pengguna','jenis_kelamin', 'no_telp', 'username','password','status'];
}
