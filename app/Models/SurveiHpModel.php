<?php

namespace App\Models;

use CodeIgniter\Model;

class SurveiHpModel extends Model
{
    protected $table      = 'survei_hp';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $createdField = 'created_at';
    protected $useTimestamps    = true;
    protected $allowedFields    =
    [
        'iduser',
        'seris',
        'os',
        'nama',
        'brand',
        'IP',
        'device'
    ];
}