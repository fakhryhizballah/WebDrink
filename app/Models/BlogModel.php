<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table      = 'blog';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';

    public function getBlog($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return  $this->where(['slug' => $slug])->first();
    }
}
