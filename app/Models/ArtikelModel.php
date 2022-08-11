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
        return  $this->where(['slug' => $slug])
        ->join('author', 'author.id_blog = blogs.id_blog')
        ->join('admin', 'admin.id_admin = author.id_admin')
        ->join('thumbnail', 'thumbnail.url = blogs.thumbnail', 'left')
        ->first();
    }
    public function getlist()
    {
        return $this->select('kota, tanggal, blogs.id_blog, judul,slug,thumbnail,des')
        ->join('status', 'status.id_blog = blogs.id_blog')
        ->where('status.status', '1')
            ->orderBy('tanggal', 'DESC')
        ->get()->getResultArray();
    }
    public function getlistArtikel()
    {
        return $this->select('judul,thumbnail,des,fullname, status, blogs.id_blog')
        ->join('author', 'author.id_blog = blogs.id_blog')
        ->join('admin', 'admin.id_admin = author.id_admin')
        ->join('status', 'status.id_blog = blogs.id_blog')
        ->get()->getResultArray();
    }
    public function detailArtikel($id_blog)
    {
        return $this->select('judul,thumbnail,fullname, des, konten, tanggal,kota, blogs.id')
        ->where(['blogs.id_blog' => $id_blog])
            ->join('author', 'author.id_blog = blogs.id_blog')
            ->join('admin', 'admin.id_admin = author.id_admin')
            ->first();

    }
}
