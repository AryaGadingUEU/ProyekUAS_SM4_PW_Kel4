<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'nama',
        'jenis_kelamin',
        'foto',
        'jurusan',
        'tmp_lahir',
        'tgl_lahir',
        'alamat',
        'nama_ibu',
        'email',
        'hp',
    ];
}