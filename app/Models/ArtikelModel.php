<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table      = 'blogs';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $useTimestamps    = true;
    protected $allowedFields = [
        'thumbnail',
        'judul',
        'kota',
        'tanggal',
        'id_blog',
        'slug',
        'des',
        'konten'
    ];

    public function getBlog($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return  $this->where(['slug' => $slug])->first();
    }
    public function getlist()
    {
        return $this->select('kota, tanggal, id_blog, judul,slug,thumbnail,des')->get()->getResultArray();
    }
}
