<?php

namespace App\Models;

use CodeIgniter\Model;

class WebinarModel extends Model
{
    protected $table      = 'webinar1';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    protected $useTimestamps    = true;
    protected $allowedFields    =
    [

        'nama',
        'email',
        'telp',
        'ket',
        'instansi',
        'confim',
    ];
}
