<?php

namespace App\Models;

use CodeIgniter\Model;

class KarirModel extends Model
{
    protected $table      = 'karir';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    protected $useTimestamps    = true;
    protected $allowedFields    =
    [
        'nama',
        'email',
        'telp',
        'agama',
        'tanggal_lahir',
        'pendidikan',
        'lulusan',
        'sekolah',
        'jurusan',
        'masuk',
        'lulus',
        'link',
        'info',
        'posisi',
        'bio',
    ];
}
