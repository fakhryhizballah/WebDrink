<?php

namespace App\Models;

use CodeIgniter\Model;


class ArsipModel extends Model
{
    protected $table            = 'thumbnail';
    protected $useTimestamps    = true;
    protected $allowedFields    = [
        'id_admin',
        'id_foto',
        'url',
        'alt',
    ];
    public function getArsip($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_foto' => $id])->getRowArray();
        }
    }

    public function updateArsip($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_foto' => $id]);
    }

    public function cek_foto($id_foto)
    {
        return $this->db->table('thumbnail')
            ->where(array('id_foto' => $id_foto))
            ->get()->getRowArray();
    }
}
