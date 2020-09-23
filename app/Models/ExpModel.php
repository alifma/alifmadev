<?php

namespace App\Models;

use CodeIgniter\Model;

class ExpModel extends Model
{
    protected $table = 'exp';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'posisi', 'deskripsi', 'periode', 'tgl', 'logo'];
    public function getExp($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
