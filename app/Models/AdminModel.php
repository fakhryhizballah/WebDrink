<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'admin';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields    =
    [
        'email',
        'picture',
        'id_admin',
        'username',
        'fullname',
        'password'
    ];

    public function findAdmin($email)
    {
        $data = $this->where(['email' => $email])->get()->getFirstRow();
        if ($data != null) {
            return $data;
        } else {
            return false;
        }
    }
}
