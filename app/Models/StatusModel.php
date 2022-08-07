<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusModel extends Model
{
    protected $table      = 'status';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    // protected $createdField = 'created_at';
    protected $useTimestamps    = true;
    protected $allowedFields    =
    [
        'id_blog',
        'last_admin',
        'status'
    ];
    public function getIdArtikel($id_blog)
    {
        return $this->where(['id_blog' => $id_blog])->first();
    }
}
