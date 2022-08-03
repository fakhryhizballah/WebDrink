<?php

namespace App\Models;

use CodeIgniter\Model;

class SessionModel extends Model
{
    protected $table      = 'session';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields    =
    [
        'IP',
        'log_IP',
        'id_admin',
        'token',
        'status'
    ];

    public function findsesi($token)
    {
        $data = $this->where(['token' => $token])->get()->getFirstRow();
        if ($data != null) {
            return $data;
        } else {
            return false;
        }
    }
}
