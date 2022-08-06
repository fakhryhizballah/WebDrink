<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthorModel extends Model
{
    protected $table      = 'author';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    // protected $createdField = 'created_at';
    protected $useTimestamps    = true;
    protected $allowedFields    =
    [
        'id_admin',
        'id_blog'
    ];
}
