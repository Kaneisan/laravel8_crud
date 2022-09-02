<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawais extends Model
{
    use HasFactory;
    protected $table = 'pegawais';
    protected $fillable = [
        'nip',
        'nama',
        'tempatlahir',
        'alamat',
        'tgllahir',
        'kelamin',
        'gol',
        'eselon',
        'jabatan',
        'tempattugas',
        'agama',
        'unitkerja',
        'nohp',
        'npwp',
        'image',
    ];
}
