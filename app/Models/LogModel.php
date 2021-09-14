<?php

namespace App\Models;

use CodeIgniter\Model;

class LogModel extends Model
{
    protected $table      = 'log';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    // protected $createdField = 'created_at';
    protected $useTimestamps    = true;
    protected $allowedFields    =
    [
        'token',
        'IP',
        'Route',
        'Referer'
    ];
}
